<?php

// database/migrations/2025_01_01_100010_create_trackings_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
  public function up(): void {
    Schema::create('trackings', function(Blueprint $t){
      $t->id();
      $t->foreignId('order_id')->constrained('orders')->cascadeOnDelete();
      $t->unsignedTinyInteger('progress')->default(0); // 0..100
      $t->string('status')->nullable(); // En préparation, En route, Livré...
      $t->text('description')->nullable();
      $t->timestamps();
    });
  }
  public function down(): void { Schema::dropIfExists('trackings'); }
};

