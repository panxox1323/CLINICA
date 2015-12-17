<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_pedidos', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_pedido')->unsigned();
            $table->foreign('id_pedido')
                ->references('id')
                ->on('pedidos')
                ->onDelete('cascade');
            $table->integer('id_insumo')->unsigned();
            $table->foreign('id_insumo')
                ->references('id')
                ->on('insumos')
                ->onDelete('cascade');
            $table->integer('cantidad');
            $table->integer('precio');

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
        Schema::drop('detalle_pedido');
    }
}
