<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laborales', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('cargo1',30)->nullable();
            $table->string('cargo2',30)->nullable();
            $table->string('cargo3',30)->nullable();
            $table->string('empresa1',30)->nullable();
            $table->string('empresa2',30)->nullable();
            $table->string('empresa3',30)->nullable();
            $table->string('periodo1',30)->nullable();
            $table->string('periodo2',30)->nullable();
            $table->string('periodo3',30)->nullable();
            $table->string('horario1',30)->nullable();
            $table->string('horario2',30)->nullable();
            $table->string('horario3',30)->nullable();
            $table->string('riesgo1',30)->nullable();
            $table->string('riesgo2',30)->nullable();
            $table->string('riesgo3',30)->nullable();
            $table->string('equipo1',30)->nullable();
            $table->string('equipo2',30)->nullable();
            $table->string('equipo3',30)->nullable();
            $table->string('cargod1',100)->nullable();
            $table->string('cargod2',100)->nullable();
            $table->string('cargod3',100)->nullable();
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
        Schema::dropIfExists('laborales');
    }
}
