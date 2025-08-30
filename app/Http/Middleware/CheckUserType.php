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
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $type): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();

        if ($user->type_user !== $type) {
            // Rediriger vers le bon dashboard selon le type
            if ($user->isAdmin()) {
                return redirect()->route('admin.dashboard');
            } elseif ($user->isClient()) {
                return redirect()->route('vitrine.index');
            }
        }

        return $next($request);
    }
}
