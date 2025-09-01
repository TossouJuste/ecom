<?php

// database/migrations/2025_01_01_100000_create_orders_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
  public function up(): void {
    Schema::create('orders', function(Blueprint $t){
      $t->id();
      $t->foreignId('client_id')->constrained('users')->cascadeOnDelete();
      $t->foreignId('car_id')->constrained('cars')->cascadeOnDelete();
      $t->unsignedBigInteger('prix')->nullable();
      $t->string('status')->default('pending'); // pending|paid|cancelled
      $t->boolean('paiement_valide')->default(false);
      $t->string('tracking_code')->nullable();
      $t->timestamps();
    });
  }
  public function down(): void { Schema::dropIfExists('orders'); }
};
