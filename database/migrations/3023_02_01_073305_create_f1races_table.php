<?php

use App\Models\Grandprix;
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
        Schema::create('f1races', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grandprix_id');
            $table->foreign('grandprix_id')->references('id')->on('grandprixes');
            $table->string('circuit');
            $table->string('circuit_image');
            $table->year('first_gp');
            $table->integer('laps');
            $table->float('circuit_length', 6, 3);
            $table->float('race_distance', 7, 3);
            $table->string('lap_record');
            $table->unsignedBigInteger('lap_record_holder_driver_id');
            $table->foreign('lap_record_holder_driver_id')->references('id')->on('drivers');
            $table->year('lap_record_year');
            $table->unsignedBigInteger('last_winner_driver_id');
            $table->foreign('last_winner_driver_id')->references('id')->on('drivers');
            $table->date('start_date');
            $table->date('end_date');
            $table->longText('information');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('f1races');
    }
};
