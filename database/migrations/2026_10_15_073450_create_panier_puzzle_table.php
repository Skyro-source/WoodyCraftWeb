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
        Schema::create('panier_puzzle', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_panier');
            $table->foreign('fk_panier')->references('id')->on('panier')->onDelete('cascade'); // Permet de créer une clé étrangère
            $table->unsignedBigInteger('fk_puzzle');
            $table->foreign('fk_puzzle')->references('id')->on('puzzles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panier_puzzle');
    }
};
