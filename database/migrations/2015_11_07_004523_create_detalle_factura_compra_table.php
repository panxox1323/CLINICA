<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleFacturaCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle__compras', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('numero_factura');
            $table->integer('id_factura')->unsigned();
            $table->date('fecha_vencimiento')->nullable();
            $table->foreign('id_factura')
                ->references('id')
                ->on('factura')
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
        Schema::drop('detalle__compras');
    }

}
