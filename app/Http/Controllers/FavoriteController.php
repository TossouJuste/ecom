<?php

// app/Http/Controllers/FavoriteController.php
namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function toggle(Request $r)
    {
        $r->validate(['car_id' => ['required', 'exists:cars,id']]);
        $client_id = Auth::guard('client')->id();
        $fav = Favorite::where('client_id', $client_id)->where('car_id', $r->car_id)->first();
        if ($fav) {
            $fav->delete();
            $msg = 'Retiré des favoris';
        } else {
            Favorite::create(['client_id' => $client_id, 'car_id' => $r->car_id]);
            $msg = 'Ajouté aux favoris';
        }
        return back()->with('success', $msg);
    }
}
