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
        Schema::create('instructors', function (Blueprint $table) {
            $table->id('DNI');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->bigInteger('Telefono');
            $table->text('Correo');
            $table->boolean('Estado');
            $table->unsignedBigInteger('Codigo_red');
            $table->foreign('Codigo_red')->references('Codigo_red')->on('red_tematicas');  
            $table->unsignedBigInteger('Codigo_area');
            $table->foreign('Codigo_area')->references('Codigo_area')->on('area_tematicas');  
            $table->unsignedBigInteger('Codigo_contrato');
            $table->foreign('Codigo_contrato')->references('Codigo_contrato')->on('tipo_contratos');  
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
        Schema::dropIfExists('instructors');
    }
};
