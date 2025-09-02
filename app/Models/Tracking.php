<?php

// app/Models/Tracking.php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model {
  protected $fillable = ['order_id','progress','status','description'];
  public function order(){ return $this->belongsTo(Orders::class); }
}

