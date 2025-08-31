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
        Schema::table('cars', function (Blueprint $table) {
            //  $table->string('categorie')->nullable();
            $table->string('couleur')->nullable();
            $table->boolean('kilometrage_limite')->default(false);
            $table->enum('type_location', ['hour', 'day', 'week', 'any'])->default('day');
            $table->text('specifications')->nullable(); // JSON des équipements
            $table->boolean('disponible')->default(true);
            $table->string('localisation')->nullable();
            $table->integer('views')->default(0); // Pour le tri par popularité
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropColumn([
                'couleur', 'kilometrage_limite', 'type_location', 
                'specifications', 'disponible', 'localisation', 'views'
            ]);
        });
    }
};
