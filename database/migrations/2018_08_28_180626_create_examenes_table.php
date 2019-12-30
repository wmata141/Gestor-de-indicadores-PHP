<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examenes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('doctor');
            $table->string('id_trabajador');
            $table->string('laboratorio')-> nullable();
            $table->string('res_laboratorio')-> nullable();
            $table->string('rayosx')-> nullable();
            $table->string('res_rayosx')-> nullable();
            $table->string('visual')-> nullable();
            $table->string('res_visual')-> nullable();
            $table->string('audio')-> nullable();
            $table->string('res_audio')-> nullable();
            $table->string('exa_med')-> nullable();
            $table->string('res_exa_med')-> nullable();
            $table->string('consultorio')-> nullable();
            $table->string('fecha')->nullable();
            $table->integer('consulta')->nullable();
            $table->string('fecha_entrega')->nullable();   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examenes');
    }
}
