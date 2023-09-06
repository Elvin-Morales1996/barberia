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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('day_week');
            $table->date('start_time');
            $table->date('end_time');

            //ESTILISTA
            $table->unsignedBigInteger('stylist_id');
            $table->foreign('stylist_id')->references('id')->on('stylist');

            //SUCURSALES
            $table->unsignedBigInteger('branches_id');
            $table->foreign('branches_id')->references('id')->on('branches');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
