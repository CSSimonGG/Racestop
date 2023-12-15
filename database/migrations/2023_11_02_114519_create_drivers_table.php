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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->boolean('active');
            $table->string('name');
            $table->integer('driver_number');
            $table->unsignedBigInteger('f1team_id');
            $table->foreign('f1team_id')->references('id')->on('f1teams');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->integer('podiums');
            $table->float('world_championship_points');
            $table->integer('grand_prix_entered');
            $table->integer('world_championships');
            $table->integer('highest_race_finish');
            $table->integer('highest_race_finish_times');
            $table->integer('pole_positions');
            $table->integer('fastest_laps');
            $table->date('birth_date');
            $table->string('birth_place');
            $table->longText('biography');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
