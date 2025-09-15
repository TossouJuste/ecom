<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type_user',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Méthodes pour vérifier le type d'utilisateur
    public function isAdmin()
    {
        return $this->type_user === 'admin';
    }

    public function isClient()
    {
        return $this->type_user === 'client';
    }

    /**
     * Relation avec les favoris
     */
    public function favorites()
    {
        return $this->hasMany(Favorite::class, 'client_id');
    }

    /**
     * Relation avec les voitures favorites
     */
    public function favoriteCars()
    {
        return $this->belongsToMany(Car::class, 'favorites', 'client_id', 'car_id')
            ->withTimestamps();
    }

    /**
     * Vérifier si une voiture est dans les favoris
     */
    public function hasFavorite($carId)
    {
        return $this->favorites()->where('car_id', $carId)->exists();
    }
}
