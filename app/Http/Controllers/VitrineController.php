<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use App\Models\Produit;
use App\Models\Event;
use Illuminate\Http\Request;

class VitrineController extends Controller
{

    public function contact()
    {
        return view('vitrine.contact-us');
    } 

    public function galerie()
    {
        // Récupère 12 images par page, triées par date de création (les plus récentes d'abord)
        $images = Gallery::orderBy('created_at', 'desc')->paginate(40);

        return view('vitrine.galerie', compact('images'));
    }

    public function index()
    {
        // Récupérer les 6 dernières images
        $latestImages = Gallery::orderBy('created_at', 'desc')->take(6)->get();

        // Récupérer les 3 dernières actualités
         $latestNews = Event::orderBy('created_at', 'desc')->take(6)->get();

        return view('vitrine.index', compact('latestImages', 'latestNews'));
    }

   
 


}
