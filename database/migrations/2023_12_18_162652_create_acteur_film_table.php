<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActeurFilmTable extends Migration
{
    public function up()
    {
        Schema::create('acteur_film', function (Blueprint $table) {
            $table->id();
            $table->foreignId('acteur_id')->constrained()->onDelete('cascade');
            $table->foreignId('film_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('acteur_film');
    }
};
