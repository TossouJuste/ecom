<?php

// app/Http/Controllers/AdminOrderController.php
namespace App\Http\Controllers;

use App\Mail\OrderProgressUpdate;
use App\Mail\TrackingCodeMail;
use App\Models\Orders;
use App\Models\Tracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class AdminOrderController extends Controller
{
    /**
     * Page d'accueil des commandes admin
     */
    public function index()
    {
        $stats = [
            'total' => Orders::count(),
            'pending' => Orders::where('status', 'pending')->count(),
            'active' => Orders::where('status', 'active')->count(),
            'completed' => Orders::where('status', 'completed')->count(),
        ];

        return view('admin.orders.index', compact('stats'));
    }

    /**
     * API pour DataTables
     */
    public function getData(Request $request)
    {
        $orders = Orders::with(['car', 'client'])
            ->select('orders.*');

        return DataTables::of($orders)
            ->addIndexColumn()
            ->addColumn('client_info', function ($row) {
                return '<div>
                            <strong>' . $row->client->name . '</strong><br>
                            <small class="text-muted">' . $row->client->email . '</small><br>
                            <small class="text-info">' . $row->telephone . '</small>
                        </div>';
            })
            ->addColumn('car_info', function ($row) {
                return '<div class="d-flex align-items-center">
                            <img src="' . asset('storage/' . $row->car->image_principale) . '" 
                                 alt="Car" class="me-2" style="width: 50px; height: 40px; object-fit: cover; border-radius: 5px;">
                            <div>
                                <strong>' . $row->car->titre . '</strong><br>
                                <small class="text-muted">' . $row->car->modele . '</small>
                            </div>
                        </div>';
            })
            ->addColumn('status_select', function ($row) {
                $statuses = [
                    'pending' => 'En attente',
                    'confirmed' => 'Confirmé',
                    'active' => 'Actif',
                    'completed' => 'Terminé',
                    'cancelled' => 'Annulé'
                ];

                $options = '';
                foreach ($statuses as $value => $label) {
                    $selected = $row->status == $value ? 'selected' : '';
                    $options .= "<option value='{$value}' {$selected}>{$label}</option>";
                }

                return '<select class="form-select form-select-sm status-select" data-id="' . $row->id . '">' . $options . '</select>';
            })
            ->addColumn('progress_info', function ($row) {
                $progressClass = $row->completion_percentage >= 100 ? 'bg-success' : ($row->completion_percentage >= 50 ? 'bg-info' : 'bg-warning');

                return '<div>
                            <div class="progress mb-1" style="height: 20px;">
                                <div class="progress-bar ' . $progressClass . '" style="width: ' . $row->completion_percentage . '%">
                                    ' . $row->completion_percentage . '%
                                </div>
                            </div>
                            <small class="text-muted">' .
                    ($row->admin_description ? Str::limit($row->admin_description, 30) : 'Aucune description') .
                    '</small>
                        </div>';
            })
            ->addColumn('payment_info', function ($row) {
                $paymentBadge = $row->paiement_valide ?
                    '<span class="badge bg-success">Validé</span>' :
                    '<span class="badge bg-warning">En attente</span>';

                return '<div>
                            <strong>' . number_format($row->prix, 0, ',', ' ') . ' FCFA</strong><br>
                            ' . $paymentBadge . '<br>
                            <small class="text-muted">' . ucfirst($row->type_paiement) . '</small>
                        </div>';
            })
            ->addColumn('actions', function ($row) {
                return '<div class="btn-group" role="group">
                            <button class="btn btn-sm btn-info view-order" data-id="' . $row->id . '" title="Voir détails">
                                Voir
                            </button>
                            <button class="btn btn-sm btn-primary update-progress" data-id="' . $row->id . '" title="Mettre à jour">
                                Editer
                            </button>
                            <button class="btn btn-sm btn-success toggle-payment" data-id="' . $row->id . '" title="Paiement">
                                Valider
                            </button>
                        </div>';

                // return view('admin.orders.button', ['row' => $row]);
            })
            ->editColumn('created_at', function ($row) {
                return $row->created_at->format('d/m/Y H:i');
            })
            ->editColumn('tracking_code', function ($row) {
                return '<code class="bg-light p-1 rounded">' . $row->tracking_code . '</code>';
            })
            ->rawColumns(['client_info', 'car_info', 'status_select', 'progress_info', 'payment_info', 'actions', 'tracking_code'])
            ->make(true);
    }

    /**
     * Mettre à jour le statut d'une commande
     */
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,active,completed,cancelled'
        ]);

        $order = Orders::findOrFail($id);
        $order->update(['status' => $request->status]);

        return response()->json([
            'success' => true,
            'message' => 'Statut mis à jour avec succès'
        ]);
    }

    /**
     * Mettre à jour le pourcentage et la description
     */
    public function updateProgress(Request $request, $id)
    {
        $request->validate([
            'completion_percentage' => 'required|integer|min:0|max:100',
            'admin_description' => 'nullable|string|max:1000'
        ]);

        $order = Orders::with('client')->findOrFail($id);
        $oldPercentage = $order->completion_percentage;

        $order->update([
            'completion_percentage' => $request->completion_percentage,
            'admin_description' => $request->admin_description,
            'last_updated_by_admin' => now()
        ]);

        // Envoyer email au client si changement significatif
        if (abs($oldPercentage - $request->completion_percentage) >= 10 || $oldPercentage != $request->completion_percentage) {
            try {
                Mail::to($order->client->email)->send(new OrderProgressUpdate($order));
            } catch (\Exception $e) {
                Log::error('Erreur envoi email mise à jour: ' . $e->getMessage());
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Progression mise à jour et client notifié'
        ]);
    }

    /**
     * Basculer le statut de paiement
     */
    public function togglePayment($id)
    {
        $order = Orders::findOrFail($id);
        $order->update(['paiement_valide' => !$order->paiement_valide]);

        return response()->json([
            'success' => true,
            'message' => 'Statut de paiement mis à jour'
        ]);
    }

    /**
     * Voir détails d'une commande
     */
    public function show($id)
    {
        $order = Orders::with(['car', 'client'])->findOrFail($id);

        return response()->json([
            'success' => true,
            'order' => $order
        ]);
    }


















    // public function index()
    // {
    //     $orders = Orders::with(['client', 'car', 'tracking'])->latest()->get();
    //     return view('admin.orders.index', compact('orders'));
    // }

    // public function validatePayment(Orders $order)
    // {
    //     if (!$order->paiement_valide) {
    //         $order->paiement_valide = true;
    //         $order->status = 'paid';
    //         $order->tracking_code = strtoupper(bin2hex(random_bytes(3))); // ex: 6 hex = 12 chars
    //         $order->save();

    //         // Crée le tracking si inexistant
    //         $order->tracking()->firstOrCreate([], [
    //             'progress' => 0,
    //             'status' => 'En préparation',
    //             'description' => null
    //         ]);

    //         Mail::to($order->client->email)->send(new TrackingCodeMail($order));
    //     }
    //     return back()->with('success', 'Paiement validé. Code de suivi envoyé.');
    // }

    // public function updateTracking(Request $r, Orders $order)
    // {
    //     $data = $r->validate([
    //         'progress' => ['required', 'integer', 'min:0', 'max:100'],
    //         'status' => ['nullable', 'string', 'max:120'],
    //         'description' => ['nullable', 'string'],
    //     ]);

    //     $tracking = $order->tracking()->firstOrCreate();
    //     $tracking->update($data);
    //     return back()->with('success', 'Tracking mis à jour');
    // }
}
