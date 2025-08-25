<?php

// database/migrations/2025_01_01_200000_create_favorites_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
  public function up(): void {
    Schema::create('favorites', function(Blueprint $t){
      $t->id();
      $t->foreignId('client_id')->constrained('clients')->cascadeOnDelete();
      $t->foreignId('car_id')->constrained('cars')->cascadeOnDelete();
      $t->timestamps();
      $t->unique(['client_id','car_id']);
    });
  }
  public function down(): void { Schema::dropIfExists('favorites'); }
};
