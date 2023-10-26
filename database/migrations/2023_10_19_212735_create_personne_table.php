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
        
            Schema::create('personne', function (Blueprint $table) {
                $table->string('nom',100);
                $table->string('datenaissance',500);
                $table->string('liennaissance',500);
                $table->string('photo',500);
                
                $table->unsignedBigInteger('id_realisateur');
                $table->unsignedBigInteger('id_producteur');
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personne');
    }
};
