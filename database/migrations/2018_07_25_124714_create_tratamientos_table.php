<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTratamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tratamientos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre');
            $table->string('dosis');
            $table->string('indicacion');
            $table->string('presentacion')-> nullable();
            $table->string('uso')-> nullable();

        });

         DB::table('tratamientos')->insert([
                ['nombre' =>'', 'dosis' => '', 'indicacion' => '', 'presentacion' => '', 'uso' => ''],
                ['nombre' =>'CETIRIZINA', 'dosis' => '10 mg', 'indicacion' => '1 capsula al dia', 'presentacion' => 'capsula', 'uso' => 'adulto'],
                ['nombre' =>'DICLOFENAC SODICO', 'dosis' => '50 mg', 'indicacion' => '1 capsula cada 8 horas', 'presentacion' => 'capsula', 'uso' => 'adulto'],
                ['nombre' =>'MIGREN', 'dosis' => '650 mg', 'indicacion' => '1 capsula cada 8 horas', 'presentacion' => 'capsula', 'uso' => 'adulto'],
                ['nombre' =>'CETIRIZINA', 'dosis' => '5 mg', 'indicacion' => '1 capsula cada 12 horas', 'presentacion' => 'capsula', 'uso' => 'pediatrico'],
                ['nombre' =>'IBUPROFENO', 'dosis' => '400 mg', 'indicacion' => '1 capsula cada 8 horas', 'presentacion' => 'capsula', 'uso' => 'adulto'],
                
                
                ]);
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tratamientos');
    }
}
