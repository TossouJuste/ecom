<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ClientAuthController extends Controller
{
    // Afficher le formulaire d'inscription
    public function showRegisterForm()
    {
        return view('authclient.register');
    }

    // Enregistrer un nouveau client
    public function register(Request $request)
    {
        $request->validate([
            'civilite' => 'required|boolean',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email',
            'telephone' => 'required|string|max:20',
            'adresse' => 'nullable|string|max:255',
            'ville' => 'nullable|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            'accepte_cgu' => 'accepted',
            'accepte_pub' => 'nullable|boolean',
        ]);

        $client = Client::create([
            'civilite' => $request->civilite,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'adresse' => $request->adresse,
            'ville' => $request->ville,
            'password' => Hash::make($request->password),
            'accepte_cgu' => $request->accepte_cgu,
            'accepte_pub' => $request->accepte_pub ?? false,
            'code_confirmation' => rand(100000, 999999),
            'email_verifie' => false,
        ]);

        // Ici tu peux envoyer un email avec le code de confirmation
        // Mail::to($client->email)->send(new ClientVerificationMail($client));

        return redirect()->route('authclient.login')->with('success', 'Inscription réussie. Vérifiez votre email pour activer votre compte.');
    }

    // Afficher le formulaire de login
    public function showLoginForm()
    {
        return view('authclient.login');
    }

    // Login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Authentification spécifique au client
        if (Auth::guard('client')->attempt($credentials, $request->remember)) {
            $request->session()->regenerate();

            return redirect()->intended(route('authclient.dashboard'));
        }

        return back()->withErrors([
            'email' => 'Ces informations d’identification ne correspondent à aucun client enregistré.',
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::guard('client')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    // Vérification du code email
    public function verify(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:clients,email',
            'code_confirmation' => 'required|digits:6',
        ]);

        $client = Client::where('email', $request->email)
                        ->where('code_confirmation', $request->code_confirmation)
                        ->first();

        if (!$client) {
            return back()->withErrors(['code_confirmation' => 'Code incorrect']);
        }

        $client->update([
            'email_verifie' => true,
            'code_confirmation' => null,
        ]);

        return redirect()->route('authclient.login')->with('success', 'Email vérifié avec succès, vous pouvez maintenant vous connecter.');
    }
}
