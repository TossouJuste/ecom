<?php

// app/Models/Favorite.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'car_id'
    ];

    /**
     * Relation avec l'utilisateur
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    /**
     * Relation avec la voiture
     */
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }

    /**
     * Vérifier si une voiture est dans les favoris d'un utilisateur
     */
    public static function isFavorite($userId, $carId)
    {
        return self::where('client_id', $userId)
            ->where('car_id', $carId)
            ->exists();
    }

    /**
     * Ajouter/Retirer des favoris
     */
    public static function toggle($userId, $carId)
    {
        $favorite = self::where('client_id', $userId)
            ->where('car_id', $carId)
            ->first();

        if ($favorite) {
            $favorite->delete();
            return false; // Retiré des favoris
        } else {
            self::create([
                'client_id' => $userId,
                'car_id' => $carId
            ]);
            return true; // Ajouté aux favoris
        }
    }
}
