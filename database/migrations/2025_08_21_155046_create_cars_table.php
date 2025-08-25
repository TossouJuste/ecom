<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->enum('type', ['new','used'])->default('used');
            $table->string('marque');
            $table->string('modele');
            $table->string('categorie')->nullable();
            $table->year('annee')->nullable();
            $table->string('vin')->nullable();
            $table->date('date_premiere_immatriculation')->nullable();
            $table->string('reference')->nullable();

            $table->tinyInteger('portes')->nullable();
            $table->tinyInteger('places')->nullable();
            $table->string('carburant')->nullable();
            $table->string('boite_vitesse')->nullable();
            $table->string('transmission')->nullable();
            $table->integer('kilometrage')->nullable();
            $table->integer('puissance_moteur_ch')->nullable();
            $table->integer('emission_co2')->nullable();

            $table->float('longueur', 8,2)->nullable();
            $table->float('largeur', 8,2)->nullable();
            $table->float('hauteur', 8,2)->nullable();
            $table->integer('poids')->nullable();

            $table->text('equipements_de_serie')->nullable();
            $table->text('options_supplementaires')->nullable();

            $table->string('image_principale')->nullable();
            $table->decimal('prix', 12,2)->nullable();
            $table->decimal('prix_mois', 12,2)->nullable();

            $table->text('description')->nullable();
            $table->string('garantie')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('cars');
    }
};
