<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        // Champs existants
        'titre',
        'type',
        'marque',
        'modele',
        'categorie',
        'annee',
        'vin',
        'date_premiere_immatriculation',
        'reference',
        'portes',
        'places',
        'carburant',
        'boite_vitesse',
        'transmission',
        'kilometrage',
        'puissance_moteur_ch',
        'emission_co2',
        'longueur',
        'largeur',
        'hauteur',
        'poids',
        'equipements_de_serie',
        'options_supplementaires',
        'image_principale',
        'prix',
        'prix_mois',
        'description',
        'garantie',

        // NOUVEAUX CHAMPS AJOUTÉS
        'kilometrage_limite',
        'type_location',
        'specifications',
        'disponible',
        'localisation',
        'views',
        'couleur',
    ];

    protected $casts = [
        'kilometrage_limite' => 'boolean',
        'disponible' => 'boolean',
        'specifications' => 'array', // Cast automatique JSON vers array
        'views' => 'integer',
        'date_premiere_immatriculation' => 'date',
    ];


    public function images()
    {
        return $this->hasMany(CarImage::class);
    }

    // FK: 'marque' = brands.id
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'marque');
    }

    // FK: 'categorie' = categories.id
    public function category()
    {
        return $this->belongsTo(Category::class, 'categorie');
    }

    // Scope pour les voitures disponibles
    public function scopeAvailable($query)
    {
        return $query->where('disponible', true);
    }

    // Scope pour recherche
    public function scopeSearch($query, $search)
    {
        return $query->where(function ($q) use ($search) {
            $q->where('titre', 'like', "%{$search}%")
                ->orWhere('modele', 'like', "%{$search}%")
                ->orWhere('marque', 'like', "%{$search}%");
        });
    }

    // Méthode dans le modèle Car pour obtenir les spécifications formatées
    public function getSpecificationsListAttribute()
    {
        if (empty($this->specifications)) {
            return [];
        }

        $specs = is_string($this->specifications)
            ? json_decode($this->specifications, true)
            : $this->specifications;

        return array_keys(array_filter($specs ?? []));
    }

    // Méthode pour vérifier si une spécification existe
    public function hasSpecification($spec)
    {
        $specifications = is_string($this->specifications)
            ? json_decode($this->specifications, true)
            : $this->specifications;

        return isset($specifications[$spec]) && $specifications[$spec];
    }
}
