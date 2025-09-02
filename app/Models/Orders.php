<?php

// app/Models/Order.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Orders extends Model
{
    protected $fillable = [
        'client_id',
        'car_id',
        'prix',
        'status',
        'paiement_valide',
        'tracking_code',
        'telephone',
        'pays',
        'ville',
        'adresse',
        'code_postal',
        'type_paiement',
        'montant',
        'completion_percentage',
        'admin_description',
        'last_updated_by_admin',
    ];

    protected $casts = [
        'paiement_valide' => 'boolean',
        'prix' => 'decimal:2',
        'montant' => 'decimal:2',
        'last_updated_by_admin' => 'datetime',
    ];

    public function tracking()
    {
        return $this->hasOne(Tracking::class);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }

    // Générer un code de suivi unique
    public static function generateTrackingCode()
    {
        return 'ORD-' . strtoupper(uniqid());
    }
}
