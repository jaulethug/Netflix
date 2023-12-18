<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActeursTable extends Migration
{
    public function up()
    {
        Schema::create('acteurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->date('date_de_naissance')->nullable();
            $table->string('nationalite')->nullable();
            // Ajoutez ici d'autres champs si nécessaire
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('acteurs');
    }
};
