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
   

        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('titre',100);
            $table->string('resume',500);
            $table->string('pochette',500);
            $table->string('duree',500);
            $table->unsignedBigInteger('id_realisateur');
            $table->foreign('realisateur')->references('id_realisateur')->on('personne');
            $table->unsignedBigInteger('id_producteur');
            $table->foreign('producteur')->references('id_prodducteur')->on('personne');
            $table->unsignedBigInteger('annee');
            $table->unsignedBigInteger('rating');
            $table->string('lien',500);
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('films',function (Blueprint $table){
            //
        });
    }
};
