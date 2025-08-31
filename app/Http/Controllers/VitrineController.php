<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Gallery;
use App\Models\Produit;
use App\Models\Event;
use Illuminate\Http\Request;

class VitrineController extends Controller
{
    public function contact()
    {
        return view('vitrine.contact-us');
    }

    public function galerie()
    {
        // Récupère 12 images par page, triées par date de création (les plus récentes d'abord)
        $images = Gallery::orderBy('created_at', 'desc')->paginate(40);

        return view('vitrine.galerie', compact('images'));
    }

    public function index()
    {
        // Récupérer les 6 dernières images
        $latestImages = Gallery::orderBy('created_at', 'desc')->take(6)->get();

        // Récupérer les 3 dernières actualités
        $latestNews = Event::orderBy('created_at', 'desc')->take(6)->get();
        $latestCars = Car::orderBy('created_at', 'desc')->take(6)->get();

        return view('vitrine.index', compact('latestImages', 'latestNews', 'latestCars'));
    }

    // public function list_cars_store()
    // {
    //     $latestCars = Car::orderBy('created_at', 'desc')->latest()->get();
    //     return view('vitrine.vehicule', compact('latestCars'));
    // }


    public function list_cars_store(Request $request)
    {
        $query = Car::query();

        // FILTRES DE RECHERCHE

        // 1. Recherche par texte
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('titre', 'like', "%{$search}%")
                    ->orWhere('modele', 'like', "%{$search}%")
                    ->orWhere('marque', 'like', "%{$search}%");
            });
        }

        // 2. Filtre par marque
        if ($request->filled('brands') && is_array($request->brands)) {
            $query->whereIn('marque', $request->brands);
        }

        // 3. Filtre par catégorie de voiture
        if ($request->filled('categories') && is_array($request->categories)) {
            $query->whereIn('categorie', $request->categories);
        }

        // 4. Filtre par année
        if ($request->filled('years') && is_array($request->years)) {
            $query->whereIn('annee', $request->years);
        }

        // 5. Filtre par type de carburant
        if ($request->filled('fuel_type')) {
            $query->where('carburant', $request->fuel_type);
        }

        // 6. Filtre par kilométrage (limité/illimité)
        // if ($request->filled('mileage')) {
        //     if ($request->mileage === 'limited') {
        //         $query->where('kilometrage_limite', true);
        //     } elseif ($request->mileage === 'unlimited') {
        //         $query->where('kilometrage_limite', false);
        //     }
        // }

        // 7. Filtre par type de location
        // if ($request->filled('rental_type')) {
        //     $query->where('type_location', $request->rental_type);
        // }

        // 8. Filtre par spécifications (features)
        if ($request->filled('description') && is_array($request->specifications)) {
            foreach ($request->specifications as $spec) {
                $query->where('description', 'like', "%{$spec}%");
            }
        }

        // 9. Filtre par couleur
        // if ($request->filled('color')) {
        //     $query->where('couleur', $request->color);
        // }

        // 10. Filtre par capacité (nombre de places)
        if ($request->filled('capacity') && is_array($request->capacity)) {
            $query->whereIn('places', $request->capacity);
        }

        // 11. Filtre par prix (range)
        if ($request->filled('price_min')) {
            $query->where('prix', '>=', $request->price_min);
        }
        if ($request->filled('price_max')) {
            $query->where('prix', '<=', $request->price_max);
        }

        // 12. Filtre par transmission
        if ($request->filled('transmission')) {
            $query->where('boite_vitesse', $request->transmission);
        }

        // 13. Filtre par rating (si vous avez une table reviews)
        if ($request->filled('rating') && is_array($request->rating)) {
            $query->whereHas('reviews', function ($q) use ($request) {
                $q->whereIn('rating', $request->rating);
            });
        }

        // 14. Filtre par disponibilité
        if ($request->filled('availability') && $request->availability == '1') {
            $query->where('disponible', true);
        }

        // FILTRES DE LOCALISATION ET DATES
        if ($request->filled('pickup_location')) {
            $query->where('localisation', 'like', "%{$request->pickup_location}%");
        }

        // if ($request->filled('pickup_date') && $request->filled('return_date')) {
        //     // Vérifier la disponibilité entre les dates
        //     $query->whereDoesntHave('reservations', function ($q) use ($request) {
        //         $q->where(function ($query) use ($request) {
        //             $query->whereBetween('date_debut', [$request->pickup_date, $request->return_date])
        //                 ->orWhereBetween('date_fin', [$request->pickup_date, $request->return_date])
        //                 ->orWhere(function ($q) use ($request) {
        //                     $q->where('date_debut', '<=', $request->pickup_date)
        //                         ->where('date_fin', '>=', $request->return_date);
        //                 });
        //         });
        //     });
        // }

        // TRI
        $sortBy = $request->get('sort_by', 'newest');
        switch ($sortBy) {
            case 'newest':
                $query->orderBy('created_at', 'desc');
                break;
            case 'relevance':
                $query->orderBy('views', 'desc');
                break;
            case 'low_to_high':
                $query->orderBy('prix', 'asc');
                break;
            case 'high_to_low':
                $query->orderBy('prix', 'desc');
                break;
            case 'best_rated':
                $query->leftJoin('reviews', 'cars.id', '=', 'reviews.car_id')
                    ->selectRaw('cars.*, AVG(reviews.rating) as avg_rating')
                    ->groupBy('cars.id')
                    ->orderBy('avg_rating', 'desc');
                break;
            case 'distance':
                // Implémenter tri par distance si géolocalisation disponible
                break;
            case 'popularity':
                $query->orderBy('views', 'desc');
                break;
            default:
                $query->orderBy('created_at', 'desc');
        }

        // PAGINATION
        $perPage = $request->get('per_page', 9);
        $latestCars = $query->paginate($perPage);

        // DONNÉES POUR LES FILTRES
        $filterData = $this->getFilterData();

        // STATISTIQUES
        $totalCars = $query->count();

        return view('vitrine.vehicule', compact(
            'latestCars',
            'filterData',
            'totalCars'
        ));
    }

    private function getFilterData()
    {
        return [
            'brands' => Car::distinct()->pluck('marque')->filter()->values(),
            'categories' => Car::distinct()->pluck('categorie')->filter()->values(),
            'years' => Car::distinct()->pluck('annee')->filter()->sort()->values(),
            'fuel_types' => Car::distinct()->pluck('carburant')->filter()->values(),
            'transmissions' => Car::distinct()->pluck('boite_vitesse')->filter()->values(),
            'colors' => Car::distinct()->pluck('couleur')->filter()->values(),
            'capacities' => Car::distinct()->pluck('places')->filter()->sort()->values(),
            'price_range' => [
                'min' => Car::min('prix'),
                'max' => Car::max('prix')
            ]
        ];
    }
}
