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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->date('appointments_date');
            

            //relaciona tablas llave foranea
            
             //CLIENTE 1
             $table->unsignedBigInteger('clients_id');
             $table->foreign('clients_id')->references('id')->on('clients');

            //ESTILISTA 2
            $table->unsignedBigInteger('stylists_id');
            $table->foreign('stylists_id')->references('id')->on('stylists');

            //SERVICIO 3
            $table->unsignedBigInteger('services_id');
            $table->foreign('services_id')->references('id')->on('services');

            //BEBIDAS 4
            $table->unsignedBigInteger('drinks_id');
            $table->foreign('drinks_id')->references('id')->on('drinks');

            //MUSICA 5
            $table->unsignedBigInteger('musics_id');
            $table->foreign('musics_id')->references('id')->on('musics');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
        /*
        // Desactivar las restricciones de clave externa
    DB::statement('SET FOREIGN_KEY_CHECKS=0');
    Schema::dropIfExists('nombre_de_la_tabla');
    // Volver a activar las restricciones de clave externa
    DB::statement('SET FOREIGN_KEY_CHECKS=1');
        */
        
    }
};
