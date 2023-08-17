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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_transaction_id')->nullable()->constrained('type_transactions');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('kiosque_id')->nullable()->constrained('kiosques');
            $table->string('nom_expediteur')->nullable();
            $table->string('nom_destinataire')->nullable();
            $table->string('numero_destinataire');
            $table->foreignId('type_compte_id')->nullable()->constrained('type_comptes');
            $table->double('montant')->default(0);
            $table->string('numero_expediteur')->nullable();
            $table->string('validation')->nullable();

            /*$table->foreignId('expediteur_id')->constrained('users');
            $table->foreignId('destinataire_id')->constrained('users');*/
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
