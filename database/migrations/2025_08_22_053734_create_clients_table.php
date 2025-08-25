<?php

// database/migrations/2025_01_01_000000_create_clients_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->boolean('civilite')->default(0); // 0=M., 1=Mme
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('telephone')->nullable();
            $table->string('adresse')->nullable();
            $table->string('ville')->nullable();
            $table->string('password');
            $table->boolean('accepte_cgu')->default(false);
            $table->boolean('accepte_pub')->default(false);
            $table->string('code_confirmation', 10)->nullable();
            $table->boolean('email_verifie')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('clients');
    }
};
