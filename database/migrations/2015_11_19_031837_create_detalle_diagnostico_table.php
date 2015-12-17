<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleDiagnosticoTable extends Migration
{
    public function up()
    {
        Schema::create('detalle_diagnostico', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_diagnostico')->unsigned();
            $table->foreign('id_diagnostico')
                ->references('id')
                ->on('diagnosticos')
                ->onDelete('cascade');
            $table->integer('id_tratamiento')->unsigned();
            $table->foreign('id_tratamiento')
                ->references('id')
                ->on('tratamientos')
                ->onDelete('cascade');
            $table->enum('estado', ['pendiente', 'realizada'])->default('pendiente');
            $table->integer('precio');
            $table->integer('cantidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalle_diagnostico');
    }

}
