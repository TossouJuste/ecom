<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserType
{
   /**
     * Handle an incoming request.
     * 
     * SOLUTION 1: Paramètre optionnel avec valeur par défaut
     */
    public function handle(Request $request, Closure $next, string $type = null): Response
    {
        // Vérifier si l'utilisateur est connecté
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Vous devez être connecté.');
        }

        $user = Auth::user();

        // Si aucun type spécifié, laisser passer
        if ($type === null) {
            return $next($request);
        }

        // Vérifier le type d'utilisateur
        if ($user->type_user !== $type) {
            // Log de l'accès non autorisé
            logger()->warning('Tentative d\'accès non autorisé', [
                'user_id' => $user->id,
                'user_type' => $user->type_user,
                'required_type' => $type,
                'url' => $request->url(),
                'ip' => $request->ip(),
            ]);

            // Redirection selon le type d'utilisateur
            return match ($user->type_user) {
                'admin' => redirect()->route('admin.dashboard')
                    ->with('warning', 'Vous n\'avez pas accès à cette section.'),
                'client' => redirect()->route('client.dashboard')
                    ->with('warning', 'Vous n\'avez pas accès à cette section.'),
                default => redirect()->route('login')
                    ->with('error', 'Type d\'utilisateur non valide.'),
            };
        }

        return $next($request);
    }
}
