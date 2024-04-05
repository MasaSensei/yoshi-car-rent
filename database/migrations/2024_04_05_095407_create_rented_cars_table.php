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
        Schema::create('rented_cars', function (Blueprint $table) {
            $table->id('id_rent_car');
            $table->unsignedBigInteger('id_car');
            $table->unsignedBigInteger('id_user');
            $table->date('rent_start_date');
            $table->date('rent_end_date');
            $table->timestamps();

            $table->foreign('id_car')->references('id_car')->on('car_lists');
            $table->foreign('id_user')->references('id_user')->on('users_list');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rented_cars');
    }
};
