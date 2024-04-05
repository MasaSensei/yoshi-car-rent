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
        Schema::create('returned_cars', function (Blueprint $table) {
            $table->id('id_returned_car');
            $table->unsignedBigInteger('id_rent_car');
            $table->date('return_date');
            $table->timestamps();

            $table->foreign('id_rent_car')->references('id_rent_car')->on('rented_cars');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('returned_cars');
    }
};
