<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('ante');
            $table->string('madre',500)->nullable();
            $table->string('padre',500)->nullable();
            $table->string('hermanos',500)->nullable();
            $table->string('hijos',500)->nullable();
            $table->string('abuelos',500)->nullable();
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
        Schema::dropIfExists('antecedentes');
    }
}
