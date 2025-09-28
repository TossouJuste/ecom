<?php

// app/Http/Controllers/FavoriteController.php
namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class FavoriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // /**
    //  * Ajouter/Retirer des favoris via AJAX
    //  */
    // public function toggle(Request $request)
    // {
    //     $request->validate([
    //         'car_id' => 'required|exists:cars,id'
    //     ]);

    //     $userId = Auth::user()->id;
    //     $carId = $request->car_id;

    //     $isFavorite = Favorite::toggle($userId, $carId);

    //     Log::info([
    //         'is_favorite' => $isFavorite
    //     ]);
    //     return response()->json([
    //         'success' => true,
    //         'is_favorite' => $isFavorite,
    //         'message' => $isFavorite ? 'Ajouté aux favoris' : 'Retiré des favoris'
    //     ]);
    // }

    // /**
    //  * Afficher la page des favoris
    //  */
    // public function index()
    // {
    //     $user = Auth::user();
    //     $favoriteCars = $user->favoriteCars()
    //         ->with(['brand', 'category'])
    //         ->paginate(12);

    //     return view('favorites.index', compact('favoriteCars'));
    // }

    // /**
    //  * Supprimer un favori
    //  */
    // public function destroy($carId)
    // {
    //     $userId = Auth::id();

    //     $favorite = Favorite::where('client_id', $userId)
    //         ->where('car_id', $carId)
    //         ->first();

    //     if ($favorite) {
    //         $favorite->delete();
    //         return redirect()->back()->with('success', 'Voiture retirée des favoris');
    //     }

    //     return redirect()->back()->with('error', 'Favori non trouvé');
    // }

    // public function toggle(Request $r)
    // {
    //     $r->validate(['car_id' => ['required', 'exists:cars,id']]);
    //     $client_id = Auth::guard('client')->id();
    //     $fav = Favorite::where('client_id', $client_id)->where('car_id', $r->car_id)->first();
    //     if ($fav) {
    //         $fav->delete();
    //         $msg = 'Retiré des favoris';
    //     } else {
    //         Favorite::create(['client_id' => $client_id, 'car_id' => $r->car_id]);
    //         $msg = 'Ajouté aux favoris';
    //     }
    //     return back()->with('success', $msg);
    // }


    // =========================================================================================
     /**
     * Ajouter aux favoris
     */
    public function add(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id'
        ]);

        $userId = Auth::user()->id;
        $carId = $request->car_id;

        // Vérifier si déjà en favoris
        $exists = Favorite::where('client_id', $userId)
                         ->where('car_id', $carId)
                         ->exists();

        if ($exists) {
            return response()->json([
                'success' => false,
                'message' => 'Cette voiture est déjà dans vos favoris'
            ]);
        }

        // Ajouter aux favoris
        Favorite::create([
            'client_id' => $userId,
            'car_id' => $carId
        ]);

        return response()->json([
            'success' => true,
            'is_favorite' => true,
            // 'message' => 'Ajouté aux favoris'
            'message' => 'Effectuée'
        ]);
    }

    /**
     * Retirer des favoris
     */
    public function remove(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id'
        ]);

        $userId = Auth::user()->id;
        $carId = $request->car_id;

        $favorite = Favorite::where('client_id', $userId)
                           ->where('car_id', $carId)
                           ->first();

        if (!$favorite) {
            return response()->json([
                'success' => false,
                'message' => 'Cette voiture n\'est pas dans vos favoris'
            ]);
        }

        $favorite->delete();

        return response()->json([
            'success' => true,
            'is_favorite' => false,
            // 'message' => 'Retiré des favoris'
            'message' => 'En cours'
        ]);
    }

    /**
     * Toggle favori (garder pour compatibilité mais avec logique corrigée)
     */
    public function toggle(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id'
        ]);

        $userId = Auth::user()->id;
        $carId = $request->car_id;

        $favorite = Favorite::where('client_id', $userId)
                           ->where('car_id', $carId)
                           ->first();

        if ($favorite) {
            // Si existe, on supprime
            $favorite->delete();
            return response()->json([
                'success' => true,
                'is_favorite' => false,
                // 'message' => 'Retiré des favoris'
                'message' => 'En cours'
            ]);
        } else {
            // Si n'existe pas, on ajoute
            Favorite::create([
                'client_id' => $userId,
                'car_id' => $carId
            ]);
            return response()->json([
                'success' => true,
                'is_favorite' => true,
                // 'message' => 'Ajouté aux favoris'
                'message' => 'Effectuée'
            ]);
        }
    }

    /**
     * Vérifier le statut d'un favori
     */
    public function status(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id'
        ]);

        $userId = Auth::user()->id;
        $carId = $request->car_id;

        $isFavorite = Favorite::where('client_id', $userId)
                             ->where('car_id', $carId)
                             ->exists();

        return response()->json([
            'success' => true,
            'is_favorite' => $isFavorite
        ]);
    }

    /**
     * Afficher la page des favoris
     */
    public function index()
    {
        $user = Auth::user();
        $favoriteCars = $user->favoriteCars()
                            ->with(['brand', 'category'])
                            ->paginate(12);

        return view('favorites.index', compact('favoriteCars'));
    }

    /**
     * Supprimer un favori depuis la page favoris
     */
    public function destroy($carId)
    {
        $userId = Auth::user()->id;

        $favorite = Favorite::where('client_id', $userId)
                           ->where('car_id', $carId)
                           ->first();

        if ($favorite) {
            $favorite->delete();
            return redirect()->back()->with('success', 'Voiture retirée des favoris');
        }

        return redirect()->back()->with('error', 'Favori non trouvé');
    }
}
