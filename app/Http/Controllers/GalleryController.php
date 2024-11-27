<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    // Méthode pour afficher la liste des galeries avec pagination
    public function index()
    {
        $galleries = Gallery::paginate(10); // Affiche 10 éléments par page
        return view('admin.galleries.index', compact('galleries'));
    }

    // Affiche le formulaire de création
    public function create()
    {
        return view('admin.galleries.create');
    }


    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'titre' => 'required|string|max:255',
            'photo' => 'required|array',
            'photo.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

       // Vérifiez si des fichiers ont été téléchargés
if ($request->hasFile('photo')) {
    foreach ($request->file('photo') as $image) {
        // Stocke l'image dans le dossier 'public/galleries' du stockage
        $path = $image->store('galleries', 'public');

        // Enregistre le titre et le chemin de chaque image dans la base de données
        Gallery::create([
            'titre' => $request->titre,
            'photo' => $path, // Enregistre le chemin relatif au disque de stockage
        ]);
    }
} else {
    return back()->withErrors(['photo' => 'Aucune image téléchargée.']);
}

        return redirect()->route('admin.galleries.index')->with('success', 'Image ajoutée avec succès.');
    }

 

    // Supprime une galerie
    public function destroy(Gallery $gallery)
    {
        // Vérifiez si le fichier existe avant de le supprimer
        if ($gallery->photo && Storage::disk('public')->exists($gallery->photo)) {
            Storage::disk('public')->delete($gallery->photo);
        }

        // Supprime l'entrée de la base de données
        $gallery->delete();

        // Redirige avec un message de succès
        return redirect()->route('admin.galleries.index')->with('success', 'Image supprimée avec succès');
    }

}
