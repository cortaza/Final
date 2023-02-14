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
        Schema::create('ambiente_formacions', function (Blueprint $table) {
            $table->id('Codigo_ambiente');
            $table->string('Nombre');
            $table->string('Recursos');
            $table->string('Especialidad');
            $table->unsignedBigInteger('Codigo_centro');
            $table->foreign('Codigo_centro')->references('Codigo_centro')->on('centro_formacions');
            $table->unsignedBigInteger('Nr_ficha');
            $table->foreign('Nr_ficha')->references('Nr_ficha')->on('fichas');
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
        Schema::dropIfExists('ambiente_formacions');
    }
};
