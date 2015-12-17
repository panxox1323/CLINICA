<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('ciudad');
            $table->integer('telefono');
            $table->string('email');
            $table->string('giro');
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
        Schema::drop('proveedors');
    }
}
