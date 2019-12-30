<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctores', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('usuario')->nullable();
            $table->string('nombre')->nullable();
            $table->string('rol')->nullable();
        });

         DB::table('doctores')->insert([
            
                ['id' =>'-1', 'usuario'=>'asolorzano', 'nombre'=>'Aneli Solorzano', 'rol'=>'doctor', 'created_at'=>'2010-08-24 19:47:48'],
                ['id' =>'-2', 'usuario'=>'imalave', 'nombre'=>'Iramena Malave', 'rol'=>'doctor', 'created_at'=>'2010-08-24 19:47:49'],
                ['id' =>'-3', 'usuario'=>'mnaranjo', 'nombre'=>'Mabel Naranjo', 'rol'=>'doctor', 'created_at'=>'2010-08-24 19:47:50'],
                ['id' =>'-4', 'usuario'=>'gbonifaz', 'nombre'=>'Gliralys Bonifaz', 'rol'=>'doctor', 'created_at'=>'2010-08-24 19:47:51'],
                ['id' =>'-5', 'usuario'=>'jguzman', 'nombre'=>'Jeannellys Guzman', 'rol'=>'administrador', 'created_at'=>'2010-08-24 19:47:52'],
                ['id' =>'6', 'usuario'=>'jmrivas', 'nombre'=>'Johana Margarita Rivas', 'rol'=>'administrador', 'created_at'=>'2010-08-24 19:47:53'],

                ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctores');
    }
}
