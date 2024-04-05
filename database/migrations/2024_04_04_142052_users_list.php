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
        Schema::create('users_list', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('name');
            $table->string('address');
            $table->string('phone_number');
            $table->string('driver_license')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users_list', function (Blueprint $table) {
            $table->dropForeign(['id_car']);
        });
        Schema::dropIfExists('users_list');
    }
};
