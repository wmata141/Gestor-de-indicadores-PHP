<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSistemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistemas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre');

            

        });

        DB::table('sistemas')->insert([
                ['nombre' =>''],
                ['nombre' =>'Sistema articular'],
                ['nombre' =>'Sistema circulatorio'],
                ['nombre' =>'Sistema endocrino'],
                ['nombre' =>'Sistema esquelético'],
                ['nombre' =>'Sistema inmunitario'],
                ['nombre' =>'Sistema linfático'],
                ['nombre' =>'Sistema muscular'],
                ['nombre' =>'Sistema nervioso'],
                ['nombre' =>'Sistema integumentario'],
                ['nombre' =>'Aparato cardiovascular'],
                ['nombre' =>'Aparato digestivo'],
                ['nombre' =>'Aparato excretor o urinario'],
                ['nombre' =>'Aparato locomotor'],
                ['nombre' =>'Aparato reproductor'],
                ['nombre' =>'Aparato respiratorio'],
                ]);
                
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sistemas');
    }
}
