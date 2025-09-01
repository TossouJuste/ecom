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
            'montant' => $request->type_paiement === 'apport_direct' ? $request->montant : null,
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
}

