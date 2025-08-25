<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre','type','marque','modele','categorie','annee','vin',
        'date_premiere_immatriculation','reference','portes','places',
        'carburant','boite_vitesse','transmission','kilometrage','puissance_moteur_ch',
        'emission_co2','longueur','largeur','hauteur','poids',
        'equipements_de_serie','options_supplementaires',
        'image_principale','prix','prix_mois','description','garantie'
    ];

    public function images() {
        return $this->hasMany(CarImage::class);
    }

    // FK: 'marque' = brands.id
    public function brand() {
        return $this->belongsTo(Brand::class, 'marque');
    }

    // FK: 'categorie' = categories.id
    public function category() {
        return $this->belongsTo(Category::class, 'categorie');
    }
}
