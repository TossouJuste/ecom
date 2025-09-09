<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrderTrackingController extends Controller
{
        /**
     * Afficher le formulaire de recherche
     */
    public function showSearchForm()
    {
        return view('tracking.search');
    }

    /**
     * Rechercher une commande par code de suivi
     */
    public function trackOrder(Request $request)
    {
        $request->validate([
            'tracking_code' => 'required|string|max:50'
        ]);

        $trackingCode = strtoupper(trim($request->tracking_code));

        $order = Orders::with(['car', 'client'])
            ->where('tracking_code', $trackingCode)
            ->first();

        if (!$order) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['tracking_code' => 'Code de suivi introuvable. Vérifiez votre code et réessayez.']);
        }

        return view('tracking.details', compact('order'));
    }
}
