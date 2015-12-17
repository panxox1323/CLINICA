<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    protected $file = 'detalle_pedidos';

    protected $fillable = ['id_pedido', 'id_insumo', 'cantidad', 'precio'];


    public function pedido()
    {
        return $this->belongsTo('Oral_Plus\Pedidos', 'id_pedido', 'id');
    }

    public function insumo()
    {
        return $this->belongsTo('Oral_Plus\Insumo', 'id_insumo', 'id');
    }
}
