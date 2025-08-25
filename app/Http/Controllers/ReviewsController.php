<?php

// app/Http/Controllers/ReviewController.php
namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller {
  public function store(Request $r){
    $data = $r->validate([
      'car_id'=>['required','exists:cars,id'],
      'rating'=>['required','integer','min:1','max:5'],
      'comment'=>['nullable','string'],
    ]);
    Review::create([
      'client_id'=>Auth::guard('client')->id(),
      ...$data,'approved'=>true
    ]);
    return back()->with('success','Avis publié. Merci !');
  }
}
