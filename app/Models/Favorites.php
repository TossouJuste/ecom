<?php

// app/Models/Favorite.php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Favorite extends Model {
  protected $fillable=['client_id','car_id'];
  public function client(){ return $this->belongsTo(Client::class); }
  public function car(){ return $this->belongsTo(Car::class); }
}
