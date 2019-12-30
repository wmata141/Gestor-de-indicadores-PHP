<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitosPsicobiologicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitos_psicobiologicos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('alcohol')-> nullable();
           $table->string('fuma')-> nullable();
           $table->string('duerme_bien')-> nullable();
           $table->string('cant_diaria')-> nullable();
           $table->string('dejo_fumar')-> nullable();
           $table->string('toma_cafe')-> nullable();
           $table->string('cafe_diario')-> nullable();
           $table->string('droga')-> nullable();
           $table->string('nombre_droga')-> nullable();
           $table->string('pareja')-> nullable();
           $table->string('sex_activo')-> nullable();
           $table->string('anticonceptivos')-> nullable();
           $table->string('nombre_antic')-> nullable();
           $table->string('ligada')-> nullable();
           $table->string('fecha_ultima')-> nullable();
           $table->string('religion')-> nullable();
           $table->string('aliment_compl')-> nullable();
           $table->string('alergia_aliment')-> nullable();
           $table->string('dieta_esp')-> nullable();
           $table->string('recreacion_pref')-> nullable();
           $table->string('deporte')-> nullable();
           $table->string('disciplina')-> nullable();
           $table->string('exam_prev_anual')-> nullable();
           $table->string('alt_exam')-> nullable();
           $table->string('se_considera_sano')-> nullable();
           $table->string('sufre_enfermedad')-> nullable();
           $table->string('lentes')-> nullable();
           $table->string('mot_lentes')-> nullable();
           $table->string('medicamentos')-> nullable();
           $table->string('tipo_medic')-> nullable();
           $table->string('levantamiento_pesas')-> nullable();
           $table->string('observaciones')-> nullable();
           $table->integer('codigo');
           //$table->foreign('codigo')->references('codigo')->on('historia_medica');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitos_psicobiologicos');
    }
}
