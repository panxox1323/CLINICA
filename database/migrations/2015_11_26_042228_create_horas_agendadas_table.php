<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorasAgendadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horas_agendadas', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_especialista')->unsigned();
            $table->foreign('id_especialista')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->integer('id_horas')->unsigned();
            $table->foreign('id_horas')
                ->references('id')
                ->on('horas')
                ->onDelete('cascade');
            $table->integer('id_det_diagnostico')->unsigned()->nullable();
            $table->foreign('id_det_diagnostico')
                ->references('id')
                ->on('detalle_diagnostico')
                ->onDelete('cascade');
            $table->date('fecha');
            $table->time('hora');

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
        Schema::drop('horas_agendadas');
    }
}
