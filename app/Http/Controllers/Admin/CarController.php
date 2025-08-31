<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarImage;
use App\Models\Category;
use App\Models\Brand; // <-- important: majuscule
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with(['images', 'category', 'brand'])->latest()->get();
        $categories = Category::orderBy('name')->get();
        $marques = Brand::orderBy('name')->get();

        return view('admin.cars.index', compact('cars', 'categories', 'marques'));
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'titre' => 'required|string|max:255',
    //         'marque' => 'nullable|exists:brands,id',
    //         'categorie' => 'nullable|exists:categories,id',
    //         'prix' => 'nullable|numeric',
    //         'prix_mois' => 'nullable|numeric',
    //         'image_principale' => 'nullable|image|max:4096',
    //         'galerie_images.*' => 'nullable|image|max:4096',
    //     ]);

    //     $data = $request->except(['galerie_images']);

    //     if ($request->hasFile('image_principale')) {
    //         $data['image_principale'] = $request->file('image_principale')->store('cars', 'public');
    //     }

    //     $car = Car::create($data);

    //     if ($request->hasFile('galerie_images')) {
    //         foreach ($request->file('galerie_images') as $img) {
    //             CarImage::create([
    //                 'car_id' => $car->id,
    //                 'image_path' => $img->store('cars/gallery', 'public')
    //             ]);
    //         }
    //     }

    //     return back()->with('success', 'Véhicule ajouté avec succès.');
    // }



    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'marque' => 'nullable|exists:brands,id',
            'categorie' => 'nullable|exists:categories,id',
            'prix' => 'nullable|numeric',
            'prix_mois' => 'nullable|numeric',
            'image_principale' => 'nullable|image|max:4096',
            'galerie_images.*' => 'nullable|image|max:4096',

            // Validation des nouveaux champs
            'type_location' => 'nullable|in:hour,day,week,any',
            'kilometrage_limite' => 'nullable|boolean',
            'disponible' => 'nullable|boolean',
            'localisation' => 'nullable|string|max:255',
            'couleur' => 'nullable|string|max:100',
            'specifications_json' => 'nullable|json',
            'views' => 'nullable|integer|min:0',
        ]);

        $data = $request->except(['galerie_images', 'specifications', 'specifications_json']);

        // Traitement des champs booléens
        $data['kilometrage_limite'] = $request->has('kilometrage_limite') ? true : false;
        $data['disponible'] = $request->has('disponible') ? true : false;

        // Traitement des spécifications JSON
        if ($request->filled('specifications_json')) {
            $data['specifications'] = $request->specifications_json;
        } else {
            // Fallback si JavaScript échoue
            $specs = [];
            if ($request->has('specifications')) {
                $specs = $request->specifications;
            }
            $data['specifications'] = json_encode($specs);
        }

        // Valeurs par défaut
        $data['views'] = $data['views'] ?? 0;
        $data['type_location'] = $data['type_location'] ?? 'day';

        // Gestion de l'image principale
        if ($request->hasFile('image_principale')) {
            $data['image_principale'] = $request->file('image_principale')->store('cars', 'public');
        }

        $car = Car::create($data);

        // Gestion de la galerie d'images
        if ($request->hasFile('galerie_images')) {
            foreach ($request->file('galerie_images') as $img) {
                CarImage::create([
                    'car_id' => $car->id,
                    'image_path' => $img->store('cars/gallery', 'public')
                ]);
            }
        }

        return back()->with('success', 'Véhicule ajouté avec succès.');
    }



    // public function update(Request $request, Car $car)
    // {
    //     $request->validate([
    //         'marque' => 'nullable|exists:brands,id',
    //         'categorie' => 'nullable|exists:categories,id',
    //         'prix' => 'nullable|numeric',
    //         'prix_mois' => 'nullable|numeric',
    //         'image_principale' => 'nullable|image|max:4096',
    //         'galerie_images.*' => 'nullable|image|max:4096',
    //     ]);

    //     $data = $request->except(['galerie_images']);

    //     if ($request->hasFile('image_principale')) {
    //         if ($car->image_principale) Storage::disk('public')->delete($car->image_principale);
    //         $data['image_principale'] = $request->file('image_principale')->store('cars', 'public');
    //     }

    //     $car->update($data);

    //     if ($request->hasFile('galerie_images')) {
    //         foreach ($request->file('galerie_images') as $img) {
    //             CarImage::create([
    //                 'car_id' => $car->id,
    //                 'image_path' => $img->store('cars/gallery', 'public')
    //             ]);
    //         }
    //     }

    //     return back()->with('success', 'Véhicule mis à jour avec succès.');
    // }



    public function update(Request $request, Car $car)
    {
        $request->validate([
            'marque' => 'nullable|exists:brands,id',
            'categorie' => 'nullable|exists:categories,id',
            'prix' => 'nullable|numeric',
            'prix_mois' => 'nullable|numeric',
            'image_principale' => 'nullable|image|max:4096',
            'galerie_images.*' => 'nullable|image|max:4096',

            // Validation des nouveaux champs
            'type_location' => 'nullable|in:hour,day,week,any',
            'kilometrage_limite' => 'nullable|boolean',
            'disponible' => 'nullable|boolean',
            'localisation' => 'nullable|string|max:255',
            'couleur' => 'nullable|string|max:100',
            'specifications_json' => 'nullable|json',
            'views' => 'nullable|integer|min:0',
        ]);

        $data = $request->except(['galerie_images', 'specifications', 'specifications_json']);

        // Traitement des champs booléens
        $data['kilometrage_limite'] = $request->has('kilometrage_limite') ? true : false;
        $data['disponible'] = $request->has('disponible') ? true : false;

        // Traitement des spécifications JSON
        if ($request->filled('specifications_json')) {
            $data['specifications'] = $request->specifications_json;
        } else {
            // Fallback si JavaScript échoue
            $specs = [];
            if ($request->has('specifications')) {
                $specs = $request->specifications;
            }
            $data['specifications'] = json_encode($specs);
        }

        // Gestion de l'image principale
        if ($request->hasFile('image_principale')) {
            if ($car->image_principale) {
                Storage::disk('public')->delete($car->image_principale);
            }
            $data['image_principale'] = $request->file('image_principale')->store('cars', 'public');
        }

        $car->update($data);

        // Gestion de la galerie d'images (ajout seulement)
        if ($request->hasFile('galerie_images')) {
            foreach ($request->file('galerie_images') as $img) {
                CarImage::create([
                    'car_id' => $car->id,
                    'image_path' => $img->store('cars/gallery', 'public')
                ]);
            }
        }

        return back()->with('success', 'Véhicule mis à jour avec succès.');
    }

    public function destroy(Car $car)
    {
        if ($car->image_principale) Storage::disk('public')->delete($car->image_principale);
        foreach ($car->images as $img) {
            Storage::disk('public')->delete($img->image_path);
            $img->delete();
        }
        $car->delete();

        return back()->with('success', 'Véhicule supprimé avec succès.');
    }

    // Suppression d’une image de galerie précise
    public function destroyImage(Car $car, CarImage $image)
    {
        // sécurité: s'assurer que l'image appartient bien à la voiture
        if ($image->car_id !== $car->id) {
            abort(403);
        }
        Storage::disk('public')->delete($image->image_path);
        $image->delete();

        return back()->with('success', 'Image supprimée.');
    }
}
