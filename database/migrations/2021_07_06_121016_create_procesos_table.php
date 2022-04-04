<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcesosTable extends Migration
{

    public function up()
    {
        Schema::create('procesos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipotrabajo_id');
            $table->integer('nro');
            $table->string('descripcion', 500);
            $table->integer('tiempomin');
            $table->tinyInteger('estado')->default('1');

            $table->timestamps();


            $table->foreign('tipotrabajo_id')->references('id')->on('tipotrabajos');
        });


        // Schema::table('procesos', function($table)
        // {
        //     $table->foreign('tipotrabajo_id')->references('id')->on('tipotrabajos');
            
        // });
        

    
        
        
    }










    public function down()
    {
        Schema::dropIfExists('procesos');
    }
}
