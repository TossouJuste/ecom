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
        $cars = Car::with(['images','category','brand'])->latest()->get();
        $categories = Category::orderBy('name')->get();
        $marques = Brand::orderBy('name')->get();

        return view('admin.cars.index', compact('cars', 'categories', 'marques'));
    }

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
        ]);

        $data = $request->except(['galerie_images']);

        if ($request->hasFile('image_principale')) {
            $data['image_principale'] = $request->file('image_principale')->store('cars', 'public');
        }

        $car = Car::create($data);

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

    public function update(Request $request, Car $car)
    {
        $request->validate([
            'marque' => 'nullable|exists:brands,id',
            'categorie' => 'nullable|exists:categories,id',
            'prix' => 'nullable|numeric',
            'prix_mois' => 'nullable|numeric',
            'image_principale' => 'nullable|image|max:4096',
            'galerie_images.*' => 'nullable|image|max:4096',
        ]);

        $data = $request->except(['galerie_images']);

        if ($request->hasFile('image_principale')) {
            if ($car->image_principale) Storage::disk('public')->delete($car->image_principale);
            $data['image_principale'] = $request->file('image_principale')->store('cars', 'public');
        }

        $car->update($data);

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
