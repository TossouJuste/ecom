<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\Support\Facades\Storage;

class ProduitController extends Controller
{
    // Affiche la liste de tous les produits
    public function index()
    {
        $produits = Produit::all();
        return view('admin.produits.index', compact('produits'));
    }

    // Affiche le formulaire de création d'un produit
    public function create()
    {
        return view('admin.produits.create');
    }

    public function store(Request $request)
{
    // Valider les entrées du formulaire
    $request->validate([
        'nom' => 'required|string|max:255',
        'prix' => 'required|numeric',
        'ingredients' => 'required|string',
        'mode_utilisation' => 'required|string',
        'public_cible' => 'required|string',
        'utilite' => 'required|string',
        'description' => 'required|string',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation de l'image
    ]);

    // Traiter l'image
    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('produits', 'public'); // Déplace l'image dans le dossier 'public/produits'
    } else {
        $photoPath = null; // Si aucune image n'est téléchargée, on met une valeur nulle
    }

    // Créer un nouveau produit
    $produit = Produit::create([
        'nom' => $request->nom,
        'prix' => $request->prix,
        'ingredients' => $request->ingredients,
        'mode_utilisation' => $request->mode_utilisation,
        'public_cible' => $request->public_cible,
        'utilite' => $request->utilite,
        'description' => $request->description,
        'photo' => $photoPath, // Sauvegarder le chemin de l'image
    ]);

    return redirect()->route('admin.produits.index');
}

    // Affiche les détails d'un produit spécifique
    public function show($id)
    {
        $produit = Produit::findOrFail($id);
        return view('admin.produits.show', compact('produit'));
    }

    // Affiche le formulaire d'édition pour un produit existant
    public function edit($id)
    {
        $produit = Produit::findOrFail($id);
        return view('admin.produits.edit', compact('produit'));
    }



    public function update(Request $request, $id)
    {
        // Validation des champs requis
        $request->validate([
            'nom' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'ingredients' => 'required|string',
            'mode_utilisation' => 'required|string',
            'public_cible' => 'required|string',
            'utilite' => 'required|string',
            'description' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Recherche du produit dans la base de données
        $produit = Produit::findOrFail($id);
    
        // Mise à jour des champs du produit
        $produit->nom = $request->nom;
        $produit->prix = $request->prix;
        $produit->ingredients = $request->ingredients;
        $produit->mode_utilisation = $request->mode_utilisation;
        $produit->public_cible = $request->public_cible;
        $produit->utilite = $request->utilite;
        $produit->description = $request->description;
    
        // Traitement de l'image si elle est présente dans la requête
        if ($request->hasFile('photo')) {
            // Supprimer l'ancienne image si elle existe
            if ($produit->photo) {
                Storage::delete('public/' . $produit->photo);
            }
    
            // Sauvegarder la nouvelle image dans le répertoire public/storage/photos
            $path = $request->file('photo')->store('photos', 'public');
    
            // Enregistrer le chemin de l'image dans la base de données
            $produit->photo = $path;
        }
    
        // Sauvegarde du produit mis à jour
        $produit->save();
    
        return redirect()->route('admin.produits.index', $produit->id)->with('success', 'Produit mis à jour avec succès.');
    }
    

    // Supprime un produit de la base de données
    public function destroy($id)
    {
        $produit = Produit::findOrFail($id);
        $produit->delete();

        return redirect()->route('admin.produits.index')->with('success', 'Produit supprimé avec succès.');
    }
}
