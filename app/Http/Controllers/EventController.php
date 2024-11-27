<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = event::paginate(10);
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date_realisation' => 'required|date',
            'lieu_realisation' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Sauvegarder l'image
        $photoPath = $request->file('photo')->store('events', 'public');

        event::create([
            'titre' => $request->titre,
            'photo' => $photoPath,
            'date_realisation' => $request->date_realisation,
            'lieu_realisation' => $request->lieu_realisation,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.events.index')->with('success', 'Actualité ajoutée avec succès.');
    }

    public function show(event $event)
    {
        return view('admin.events.show', compact('event'));
    }

    public function edit(event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, $id)
{
    $event = Event::findOrFail($id);

    // Validation des champs
    $request->validate([
        'titre' => 'required|string|max:255',
        'date_realisation' => 'required|date',
        'lieu_realisation' => 'required|string|max:255',
        'description' => 'required|string',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Validation de la photo
    ]);

    // Mise à jour des champs de l'événement
    $event->titre = $request->titre; 
    $event->date_realisation = $request->date_realisation;
    $event->lieu_realisation = $request->lieu_realisation;
    $event->description = $request->description;

    // Gestion de l'upload de la photo
    if ($request->hasFile('photo')) {
        // Supprimer l'ancienne photo si elle existe
        if ($event->photo && \Storage::exists('public/' . $event->photo)) {
            \Storage::delete('public/' . $event->photo);
        }

        // Enregistrer la nouvelle photo dans le dossier `public/events`
        $path = $request->file('photo')->store('events', 'public');
        $event->photo = $path; // Stocker le chemin relatif à `public/`
    }

    $event->save();

    return redirect()->route('admin.events.index')->with('success', 'Événement mis à jour avec succès.');
}


    public function destroy(event $event)
    {
        if ($event->photo) {
            Storage::disk('public')->delete($event->photo);
        }

        $event->delete();

        return redirect()->route('admin.events.index')->with('success', 'Actualité supprimée avec succès.');
    }
}
