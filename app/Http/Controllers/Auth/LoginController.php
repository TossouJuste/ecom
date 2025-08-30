<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    protected function authenticated(Request $request)
    {
        $user = Auth::user();
       if ($user->isAdmin()) {
            return redirect()->route('admin.dashboard');
        }
        
        if ($user->isClient()) {
            return redirect()->route('vitrine.index');
        }

        // Fallback par défaut
        // return redirect($this->redirectTo);
    }
}
