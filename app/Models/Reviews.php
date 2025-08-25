<?php

// app/Models/Review.php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Review extends Model {
  protected $fillable=['client_id','car_id','rating','comment','approved'];
  public function client(){ return $this->belongsTo(Client::class); }
  public function car(){ return $this->belongsTo(Car::class); }
}
