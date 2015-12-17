<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosticos', function(Blueprint $table)
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
            $table->date('fecha');
            $table->integer('total');
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
        Schema::drop('diagnosticos');
    }

}
