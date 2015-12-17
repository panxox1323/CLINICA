<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIvasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ivas', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('porcentaje_iva');
            $table->date('fecha_inicio');
            $table->date('fecha_termino')->nullable();
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
        Schema::drop('ivas');
    }
}
