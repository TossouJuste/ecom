<?php

// app/Http/Controllers/AdminOrderController.php
namespace App\Http\Controllers;

use App\Mail\TrackingCodeMail;
use App\Models\Order;
use App\Models\Tracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminOrderController extends Controller
{
  public function index(){
    $orders = Order::with(['client','car','tracking'])->latest()->get();
    return view('admin.orders.index', compact('orders'));
  }

  public function validatePayment(Order $order){
    if(!$order->paiement_valide){
      $order->paiement_valide = true;
      $order->status = 'paid';
      $order->tracking_code = strtoupper(bin2hex(random_bytes(3))); // ex: 6 hex = 12 chars
      $order->save();

      // Crée le tracking si inexistant
      $order->tracking()->firstOrCreate([], [
        'progress'=>0, 'status'=>'En préparation', 'description'=>null
      ]);

      Mail::to($order->client->email)->send(new TrackingCodeMail($order));
    }
    return back()->with('success','Paiement validé. Code de suivi envoyé.');
  }

  public function updateTracking(Request $r, Order $order){
    $data = $r->validate([
      'progress'=>['required','integer','min:0','max:100'],
      'status'=>['nullable','string','max:120'],
      'description'=>['nullable','string'],
    ]);

    $tracking = $order->tracking()->firstOrCreate();
    $tracking->update($data);

    return back()->with('success','Tracking mis à jour');
  }
}
