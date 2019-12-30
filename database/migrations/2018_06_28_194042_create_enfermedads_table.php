<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnfermedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfermedads', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre')-> unique();
            $table->string('descripcion',500)-> nullable();
            $table->string('tipo_ocupacional')->nullable();
            $table->string('sintomas', 200)->nullable();
            $table->string('tratamiento',200)->nullable();
            $table->string('sistema',200)->nullable();
            $table->string('indicaciones', 200) ->nullable();
        });


        DB::table('enfermedads')->insert([
                ['nombre' =>'', 'descripcion' =>'', 'tipo_ocupacional' =>'', 'sintomas' =>'','tratamiento' =>'','sistema' =>'','indicaciones' =>''],
                ['nombre' =>'migraña', 'descripcion' =>'se produce como consecuencia de la activación o irritación de las fibras del nervio trigémino', 'tipo_ocupacional' =>'', 'sintomas' =>'Dolor de cabeza, aturdimiento ligero, malestar o mareos, sensibilidad a la luz, sensibilidad al sonido, náusea o vómitos','tratamiento' =>'migren','sistema' =>'Sistema nervioso','indicaciones' =>' 1 capsula cada 8 horas'],
                ['nombre' =>'gripe', 'descripcion' =>'Es una infección de la nariz, la garganta y los pulmones que se propaga fácilmente.', 'tipo_ocupacional' =>'', 'sintomas' =>'deshidratación, dolor corporal, escalofríos, fatiga, fiebre, pérdida de apetito, rubor o sudoración, congestión en la cabeza, dificultad para respirar, dolor de cabeza, dolor de garganta','tratamiento' =>'ibuprofeno','sistema' =>'Sistema respiratorio','indicaciones' =>'1 capsula cada 8 horas'],
                //['nombre' =>'', 'descripcion' =>'', 'tipo_ocupacional' =>'', 'sintomas' =>'','tratamiento' =>'','sistema' =>'','indicaciones' =>''],
                
                ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enfermedads');
    }
}
