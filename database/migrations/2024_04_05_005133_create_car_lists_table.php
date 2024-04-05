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
        Schema::create('car_lists', function (Blueprint $table) {
            $table->id('id_car');
            $table->unsignedBigInteger('id_user')->nullable();
            $table->unsignedBigInteger('id_model');
            $table->string('number_plate');
            $table->integer('price');
            $table->enum('status', ['available', 'rented'])->default('available');
            $table->dateTime('rental_start')->nullable();
            $table->dateTime('rental_end')->nullable();
            $table->timestamps();

            $table->foreign('id_model')->references('id_model')->on('models');
            $table->foreign('id_user')->references('id_user')->on('users_list');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_lists');
    }
};
