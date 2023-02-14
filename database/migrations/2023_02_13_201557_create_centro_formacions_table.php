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
        Schema::create('centro_formacions', function (Blueprint $table) {
            $table->id('Codigo_centro');
            $table->integer('Nr_ambientes');
            $table->unsignedBigInteger('ID_usuario');
            $table->foreign('ID_usuario')->references('ID_usuario')->on('administracions');
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
        Schema::dropIfExists('centro_formacions');
    }
};
