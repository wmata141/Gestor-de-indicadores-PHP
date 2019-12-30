<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionesMedicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluaciones_medicas', function (Blueprint $table) {
            $table->increments('codigo');
            $table->timestamps();
            $table->string('motivo', 500)-> nullable();
            $table->string('situacion_actual', 500)-> nullable();
            $table->string('plan_tratamiento', 500)-> nullable();
            $table->string('hallazgo', 500)-> nullable();
            $table->string('id_trabajador');
            $table->string('impresiones', 500)-> nullable();
            $table->string('antecedentes')-> nullable();
            $table->string('ta')-> nullable();
            $table->string('mm')-> nullable();
            $table->string('fc')-> nullable();
            $table->string('rp')-> nullable();
            $table->string('peso')-> nullable();
            $table->string('imc')-> nullable();
            $table->string('talla')-> nullable();






            //$table->foreign('id_trabajador')->references('id')->on('trabajadores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluaciones_medicas');
    }
}
