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
             $table->unsignedBigInteger('client_id');
             $table->foreign('client_id')->references('id')->on('clients');

            //ESTILISTA 2
            $table->unsignedBigInteger('stylist_id');
            $table->foreign('stylist_id')->references('id')->on('stylist');

            //SERVICIO 3
            $table->unsignedBigInteger('services_id');
            $table->foreign('services_id')->references('id')->on('services');

            //BEBIDAS 4
            $table->unsignedBigInteger('drinks_id');
            $table->foreign('drinks_id')->references('id')->on('drinks');

            //MUSICA 5
            $table->unsignedBigInteger('music_id');
            $table->foreign('music_id')->references('id')->on('music');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
        
    }
};
