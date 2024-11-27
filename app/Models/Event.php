<?php

// In app/Models/Event.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titre',
        'photo',
        'date_realisation',
        'lieu_realisation', 
        'description',
    ];

    protected $casts = [
        'date_realisation' => 'datetime',
    ];
}

