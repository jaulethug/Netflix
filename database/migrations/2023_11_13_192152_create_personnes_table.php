<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('personnes', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->date('date_de_naissance');
        $table->string('lieu_de_naissance');
        $table->string('photo');
        $table->unsignedBigInteger('id_realisateur')->nullable();
        $table->unsignedBigInteger('id_producteur')->nullable();
        $table->timestamps();

        $table->foreign('id_realisateur')->references('id')->on('personnes');
        $table->foreign('id_producteur')->references('id')->on('personnes');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnes');
    }
};
