<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    // Define the fillable attributes
    protected $fillable = [
        'nom', 
        'prix', 
        'ingredients', 
        'mode_utilisation', 
        'public_cible', 
        'utilite', 
        'description', 
        'photo' // Include other fields you want to mass-assign
    ];
}

