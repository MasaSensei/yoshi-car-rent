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
            $table->unsignedBigInteger('id_brand');
            $table->string('image');
            $table->string('model');
            $table->string('number_plate');
            $table->integer('price');
            $table->enum('status', ['available', 'rented'])->default('available');
            $table->timestamps();
            $table->foreign('id_brand')->references('id_brand')->on('brands');
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
