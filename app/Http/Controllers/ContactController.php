<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            // Enregistrer les données dans la base de données
            ContactMessage::create($request->all());

            // Ajouter un message de succès
            return back()->with('success', 'Votre message a été envoyé avec succès.');
        } catch (\Exception $e) {
            // Ajouter un message d'erreur
            return back()->with('error', 'Une erreur est survenue. Veuillez réessayer.');
        }
    }


    public function contact()
    {
        // Récupérer tous les messages
        $messages = ContactMessage::all();

        return view('admin.contact', compact('messages'));
    }
}
