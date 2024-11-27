<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->decimal('prix', 10, 2); // Prix avec deux décimales
            $table->text('ingredients'); // Ingrédients
            $table->text('mode_utilisation'); // Mode d'utilisation
            $table->string('public_cible'); // Public cible
            $table->string('utilite'); // Suggestion de nom : "utilite" pour ce que le produit traite
            $table->text('description'); // Description complète
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
