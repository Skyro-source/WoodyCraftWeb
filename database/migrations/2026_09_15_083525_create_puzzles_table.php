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
        Schema::create('puzzles', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->index('fk_categorie');
            $table->foreign('fk_categorie')->references('id')->on('categorie')->onDelete('cascade'); // Permet de créer une clé étrangère
            $table->string('description');
            $table->string('image');
            $table->float('prix');
            $table->index('fk_fabricant');
            $table->foreign('fk_fabricant')->references('id')->on('fabricant')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('puzzles');
    }
};
