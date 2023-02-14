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
        Schema::create('semaforos', function (Blueprint $table) {
            $table->id('Semaforo');
            $table->integer('Dia_semana');
            $table->integer('Trimestre');
            $table->unsignedBigInteger('Codigo_comp');
            $table->foreign('Codigo_comp')->references('Codigo_comp')->on('competencias');
            $table->unsignedBigInteger('Codigo_prog');
            $table->foreign('Codigo_prog')->references('Codigo_prog')->on('programas');
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
        Schema::dropIfExists('semaforos');
    }
};
