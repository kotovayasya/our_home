<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('city_type');
            $table->string('city');
            $table->string('street_type');
            $table->string('street');
            $table->string('house_type');
            $table->string('house');
            $table->string('block_type')->nullable();
            $table->string('block')->nullable();
            $table->string('geo_lat');
            $table->string('geo_lon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
};