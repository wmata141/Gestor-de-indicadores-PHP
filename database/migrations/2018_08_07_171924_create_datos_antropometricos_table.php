<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosAntropometricosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_antropometricos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('codigo');
            $table->string('peso')->nullable();
            $table->string('talla')->nullable();
            $table->string('imc')->nullable();
            $table->string('ta')->nullable();
            $table->string('mm')->nullable();
            $table->string('fc')->nullable();
            $table->string('rp')->nullable();
            $table->string( 'piel')->nullable();
            $table->string('cabeza')->nullable();
            $table->string('ojos')->nullable();
            $table->string('oidos')->nullable();
            $table->string('n_b_g')->nullable();
            $table->string('c_g_c')->nullable();
            $table->string('t_b')->nullable();
            $table->string('mamas')->nullable();
            $table->string('c_v')->nullable();
            $table->string('abdomen')->nullable();
            $table->string('hernias')->nullable();
            $table->string('urogenital')->nullable();
            $table->string('ap_e')->nullable();
            $table->string('columna')->nullable();
            $table->string('neuro')->nullable();
            $table->string('observaciones')->nullable();
            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_antropometricos');
    }
}
