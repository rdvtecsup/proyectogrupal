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
        Schema::create('copias', function (Blueprint $table) {
            $table->id();
            $table->string('formato');
            $table->unsignedBigInteger('id_pelicula');
            $table->foreign('id_pelicula')->references('id')->on('peliculas');
            $table->string('precio_alquiler');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('copias');
    }
};
