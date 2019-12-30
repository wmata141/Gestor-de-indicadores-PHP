<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriasMedicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historias_medicas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('telefono')-> nullable();
            $table->string('nombre');
            $table->string('mano_domin')-> nullable();
            $table->string('edad');
            $table->string('grupo_sang')-> nullable();
            $table->string('fecha_nac')-> nullable();
            $table->string('estado_civil')-> nullable();
            $table->string('en_caso_emerg', 500)-> nullable();
            $table->string('direccion', 500)-> nullable();
            $table->string('cedula')->unique();
            $table->string('apellido');
            $table->string('cargo', 50)-> nullable();
            $table->string('gerencia', 50)-> nullable();
            $table->string('ficha', 50);
            $table->string('horario', 50)-> nullable();
            $table->string('nivel_educ', 50)-> nullable();
            $table->string('t_pantalon', 50)-> nullable();
            $table->string('t_camisa', 50)-> nullable();
            $table->string('zapato', 50)-> nullable();
            $table->string('primaria', 50)-> nullable();
            $table->string('t_primaria', 50)-> nullable();
            $table->string('secundaria', 50)-> nullable();
            $table->string('t_secundaria', 50)-> nullable();
            $table->string('univ', 50)-> nullable();
            $table->string('t_univ', 50)-> nullable();
            $table->string('dip1', 50)-> nullable();
            $table->string('t_dip1', 50)-> nullable();
            $table->string('dip2', 50)-> nullable();
            $table->string('t_dip2', 50)-> nullable();
            $table->string('telefono1')-> nullable();
            $table->string('supervisor')->nullable(); 
            $table->string('doctor');


           // $table->foreign('id_trabajador')->references('id')->on('trabajadores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historias_medicas');
    }
}
