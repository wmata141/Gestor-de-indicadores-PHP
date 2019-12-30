<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            
            $table->increments('id');
            $table->timestamps();
            $table->string('motivo', 500)-> nullable();
            $table->string('nombre', 500)-> nullable();
             $table->string('edad')-> nullable();
            $table->string('apellido', 500)-> nullable();
            $table->string('situacion_actual', 500)-> nullable();
            $table->string('plan_tratamiento')-> nullable();
            $table->string('plan_tratamiento1')-> nullable();
            $table->string('plan_tratamiento2')-> nullable();
            $table->string('plan_tratamiento3')-> nullable();
            $table->string('plan_tratamiento4')-> nullable();
            $table->string('plan_tratamiento5')-> nullable();
            $table->string('plan_tratamiento6')-> nullable();
            $table->string('plan_tratamiento7')-> nullable();
            $table->string('plan_tratamiento8')-> nullable();
            $table->string('hallazgo', 500)-> nullable();
            $table->string('id_trabajador',500);
            $table->string('impresiones')-> nullable();
            $table->string('impresiones2')-> nullable();
            $table->string('impresiones3')-> nullable();
            $table->string('antecedentes')-> nullable();
            $table->string('ta')-> nullable();
            $table->string('mm')-> nullable();
            $table->string('fc')-> nullable();
            $table->string('rp')-> nullable();
            $table->string('peso')-> nullable();
            $table->string('imc')-> nullable();
            $table->string('talla')-> nullable();
            $table->string('sugerencias')-> nullable();
            $table->string('tipo_consulta')-> nullable();
            $table->string('reposo_ini')-> nullable();
            $table->string('reposo_fin')-> nullable();
            $table->string('referido')-> nullable();
            $table->string('cedula');
            $table->string('dias')-> nullable();
            $table->string('motivo2')-> nullable();
            $table->string('doctor')->nullable();
            //$table->string('usuario');


        });
            
            DB::table('consultas')->insert([
                ['nombre' =>'', 'id_trabajador'=>'', 'cedula'=>'', 'apellido'=>'', 'edad'=>'', 'created_at'=>'2010-08-24 19:47:48'],

                ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultas');
    }
}
