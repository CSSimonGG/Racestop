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
        Schema::create('f1teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo_path');
            $table->string('team_hex_color');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->string('team_chief');
            $table->string('power_unit');
            $table->integer('world_championships');
            $table->float('world_championship_points');
            $table->integer('highest_race_finish');
            $table->integer('highest_race_finish_times');
            $table->integer('podiums');
            $table->integer('pole_positions');
            $table->integer('fastest_laps');
            $table->unsignedBigInteger('first_driver_id');
            $table->foreign('first_driver_id')->references('id')->on('drivers');
            $table->unsignedBigInteger('second_driver_id');
            $table->foreign('second_driver_id')->references('id')->on('drivers');
            $table->longText('information');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('f1teams');
    }
};
