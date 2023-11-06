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
        Schema::create('films_personne', function (Blueprint $table) {
            $table->id();
            $table->foreign_id('films_id')->constrained();
            $table->foreign_id('personne_id')->constrained();
            $table->foreignId('realisateur_id')->constrained('personnes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films_personne');
    }
};
