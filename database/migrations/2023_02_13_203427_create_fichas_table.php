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
        Schema::create('fichas', function (Blueprint $table) {
            $table->id('Nr_ficha');
            $table->string('Jornada');
            $table->string('Modalidad');
            $table->integer('Nr_aprendices');
            $table->unsignedBigInteger('Codigo_prog');
            $table->foreign('Codigo_prog')->references('Codigo_prog')->on('programas');
            $table->unsignedBigInteger('Codigo_formacion');
            $table->foreign('Codigo_formacion')->references('Codigo_formacion')->on('tipo_formacions');
            $table->unsignedBigInteger('DNI');
            $table->foreign('DNI')->references('DNI')->on('instructors');
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
        Schema::dropIfExists('fichas');
    }
};
