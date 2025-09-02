<?php

// app/Http/Controllers/OrderController.php
namespace App\Http\Controllers;
use App\Mail\NewOrderAdmin;
use App\Mail\OrderConfirmation;
use App\Models\Order;
use App\Models\Car;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Yajra\DataTables\Facades\DataTables;

class OrdersController extends Controller
{
//   public function store(Request $r){
//     $data = $r->validate([
//       'car_id'=>['required','exists:cars,id'],
//     ]);
//     $car = Car::findOrFail($data['car_id']);

//     $order = Order::create([
//       'client_id'=>Auth::guard('client')->id(),
//       'car_id'=>$car->id,
//       'prix'=>$car->prix,
//       'status'=>'pending',
//       'paiement_valide'=>false,
//     ]);

//     return back()->with('success','Commande envoyée. Nous vous contacterons très vite.');
//   }

public function store(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'telephone' => 'required|string|max:20',
            'pays' => 'required|string|max:100',
            'ville' => 'required|string|max:100',
            'adresse' => 'required|string|max:500',
            'code_postal' => 'nullable|string|max:10',
            'type_paiement' => 'required|in:financement,apport_direct',
            'montant' => 'required_if:type_paiement,apport_direct|nullable|numeric|min:0',
        ]);

        $car = Car::findOrFail($request->car_id);

        $order = Orders::create([
            'client_id' => Auth::user()->id,
            'car_id' => $request->car_id,
            'prix' => $car->prix,
            'status' => 'pending',
            'paiement_valide' => false,
            'tracking_code' => Orders::generateTrackingCode(),
            'telephone' => $request->telephone,
            'pays' => $request->pays,
            'ville' => $request->ville,
            'adresse' => $request->adresse,
            'code_postal' => $request->code_postal,
            'type_paiement' => $request->type_paiement,
            'montant' => $request->type_paiement === 'apport_direct' ? $request->montant : 0,
        ]);

        // Envoi des emails
        try {
            // Email au client
            Mail::to(Auth::user()->email)->send(new OrderConfirmation($order));

            // Email à l'admin (vous pouvez configurer l'email admin dans config/mail.php)
            $adminEmail = 'admin@example.com';
            Mail::to($adminEmail)->send(new NewOrderAdmin($order));

        } catch (\Exception $e) {
            // Log l'erreur mais ne pas faire échouer la commande
            Log::error('Erreur envoi email commande: ' . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'Commande créée avec succès!',
            'tracking_code' => $order->tracking_code
        ]);
    }



    /**
     * Afficher la page des réservations
     */
    public function index()
    {
        return view(view: 'vitrine.orders-list');
    }

    /**
     * API pour DataTables
     */
    public function getData(Request $request)
    {
        $orders = Orders::with(['car', 'client'])
            ->where('client_id', Auth::user()->id)
            ->select('orders.*');

        return DataTables::of($orders)
            ->addIndexColumn()
            ->addColumn('car_info', function ($row) {
                return '<div class="d-flex align-items-center">
                            <img src="' . asset('storage/' . $row->car->image_principale) . '" 
                                 alt="Car" class="me-2" style="width: 50px; height: 40px; object-fit: cover; border-radius: 5px;">
                            <div>
                                <strong>' . $row->car->titre . '</strong><br>
                                <small class="">' . $row->car->modele . '</small>
                            </div>
                        </div>';
            })
            ->addColumn('status_badge', function ($row) {
                $badges = [
                    'pending' => 'bg-warning text-dark',
                    'confirmed' => 'bg-info',
                    'active' => 'bg-success',
                    'completed' => 'bg-primary',
                    'cancelled' => 'bg-danger',
                ];
                $statusText = ucfirst($row->status);
                $badgeClass = $badges[$row->status] ?? 'bg-secondary';
                
                return '<span class="badge ' . $badgeClass . '">' . $statusText . '</span>';
            })
            ->addColumn('payment_info', function ($row) {
                $paymentType = $row->type_paiement == 'financement' ? 'Financement' : 'Apport direct';
                $html = '<div>';
                $html .= '<strong>' . number_format($row->prix, 0, ',', ' ') . ' FCFA</strong><br>';
                $html .= '<small class="">' . $paymentType . '</small>';
                if ($row->montant) {
                    $html .= '<br><small class="text-success">Versé: ' . number_format($row->montant, 0, ',', ' ') . ' FCFA</small>';
                }
                $html .= '</div>';
                return $html;
            })
            ->addColumn('contact_info', function ($row) {
                return '<div>
                            <strong>' . $row->telephone . '</strong><br>
                            <small class="">' . $row->ville . ', ' . $row->pays . '</small>
                        </div>';
            })
            ->addColumn('actions', function ($row) {
                return '<div class="btn-group" role="group">
                            <button class="btn btn-sm btn-info view-order" data-id="' . $row->id . '" title="Voir détails">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="btn btn-sm btn-secondary" onclick="copyTrackingCode(\'' . $row->tracking_code . '\')" title="Copier code">
                                <i class="fas fa-copy"></i>
                            </button>
                            ' . ($row->status == 'pending' ? 
                                '<button class="btn btn-sm btn-danger cancel-order" data-id="' . $row->id . '" title="Annuler">
                                    <i class="fas fa-times"></i>
                                </button>' : '') . '
                        </div>';
            })
            ->editColumn('created_at', function ($row) {
                return $row->created_at->format('d/m/Y H:i');
            })
            ->editColumn('tracking_code', function ($row) {
                return '<code class="bg-light p-1 rounded">' . $row->tracking_code . '</code>';
            })
            ->rawColumns(['car_info', 'status_badge', 'payment_info', 'contact_info', 'actions', 'tracking_code'])
            ->make(true);
    }

    /**
     * Voir les détails d'une commande
     */
    public function show($id)
    {
        $order = Orders::with(['car', 'client'])
            ->where('client_id', Auth::user()->id)
            ->findOrFail($id);

        return response()->json([
            'success' => true,
            'order' => $order
        ]);
    }

    /**
     * Annuler une commande
     */
    public function cancel($id)
    {
        $order = Orders::where('client_id', Auth::user()->id)
            ->where('status', 'pending')
            ->findOrFail($id);

        $order->update(['status' => 'cancelled']);

        return response()->json([
            'success' => true,
            'message' => 'Commande annulée avec succès'
        ]);
    }
}

