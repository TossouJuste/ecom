<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'civilite','nom','prenom','email','telephone','adresse','ville',
        'password','accepte_cgu','accepte_pub','code_confirmation','email_verifie'
    ];

    protected $hidden = ['password','code_confirmation'];

    protected $casts = [
        'civilite'=>'boolean',
        'accepte_cgu'=>'boolean',
        'accepte_pub'=>'boolean',
        'email_verifie'=>'boolean',
    ];

    public function orders(){ return $this->hasMany(Order::class); }
    public function favorites(){ return $this->hasMany(Favorite::class); }
    public function reviews(){ return $this->hasMany(Review::class); }
}
