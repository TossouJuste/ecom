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
        Schema::table('orders', function (Blueprint $table) {
            $table->string('telephone')->nullable();
            $table->string('pays')->nullable();
            $table->string('ville')->nullable();
            $table->text('adresse')->nullable();
            $table->string('code_postal')->nullable();
            $table->enum('type_paiement', ['financement', 'apport_direct'])->default('apport_direct');
            $table->decimal('montant', 10, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn([
                'telephone', 'pays', 'ville', 'adresse',
                'code_postal', 'type_paiement', 'montant'
            ]);
        });
    }
};
