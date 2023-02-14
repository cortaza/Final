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
        Schema::create('programas', function (Blueprint $table) {
            $table->id('Codigo_prog');
            $table->string('Nombre');
            $table->boolean('Estado');
            $table->string('Nivel_formacion');
            $table->string('Duracion');
            $table->integer('Version');
            $table->unsignedBigInteger('Codigo_centro');
            $table->foreign('Codigo_centro')->references('Codigo_centro')->on('centro_formacions');
            $table->unsignedBigInteger('Codigo_area');
            $table->foreign('Codigo_area')->references('Codigo_area')->on('area_tematicas');
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
        Schema::dropIfExists('programas');
    }
};
