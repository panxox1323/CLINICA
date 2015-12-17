<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_proveedor')->unsigned();
            $table->foreign('id_proveedor')
                ->references('id')
                ->on('proveedors')
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
        Schema::drop('pedidos');
    }
}
