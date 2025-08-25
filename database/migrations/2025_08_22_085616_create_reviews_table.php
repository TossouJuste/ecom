<?php

// database/migrations/2025_01_01_200010_create_reviews_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
  public function up(): void {
    Schema::create('reviews', function(Blueprint $t){
      $t->id();
      $t->foreignId('client_id')->constrained('clients')->cascadeOnDelete();
      $t->foreignId('car_id')->constrained('cars')->cascadeOnDelete();
      $t->unsignedTinyInteger('rating'); // 1..5
      $t->text('comment')->nullable();
      $t->boolean('approved')->default(true); // ou validation admin
      $t->timestamps();
    });
  }
  public function down(): void { Schema::dropIfExists('reviews'); }
};

