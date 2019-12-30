<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultados', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('espirometria')-> nullable();
            $table->string('audiometria')-> nullable();
            $table->string('visual')-> nullable();
            $table->string('electrocardiograma')-> nullable();
            $table->string('laboratorio')-> nullable();
            $table->string('grupo_sanguineo')-> nullable();
            $table->string('rx_lumbosacro')-> nullable();
            $table->string('rx_torax')-> nullable();
            $table->string('impresiones_diagnosticas')-> nullable();
            $table->string('recomendaciones')-> nullable();
            $table->integer('codigo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultados');
    }
}
