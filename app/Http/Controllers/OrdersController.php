<?php

// app/Http/Controllers/OrderController.php
namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
  public function store(Request $r){
    $data = $r->validate([
      'car_id'=>['required','exists:cars,id'],
    ]);
    $car = Car::findOrFail($data['car_id']);

    $order = Order::create([
      'client_id'=>Auth::guard('client')->id(),
      'car_id'=>$car->id,
      'prix'=>$car->prix,
      'status'=>'pending',
      'paiement_valide'=>false,
    ]);

    return back()->with('success','Commande envoyée. Nous vous contacterons très vite.');
  }
}

