<?php

// app/Models/Order.php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Order extends Model {
  protected $fillable = ['client_id','car_id','prix','status','paiement_valide','tracking_code'];
  public function client(){ return $this->belongsTo(Client::class); }
  public function car(){ return $this->belongsTo(Car::class); }
  public function tracking(){ return $this->hasOne(Tracking::class); }
}

