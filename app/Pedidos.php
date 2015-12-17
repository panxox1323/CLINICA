<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $fila = 'pedidos';

    protected $fillable = ['id_proveedor', 'fecha', 'total'];


    public function proveedor()
    {
        return $this->belongsTo('Oral_Plus\Proveedor', 'id_proveedor', 'id');
    }

    public function detalle_pedido()
    {
        return $this->hasMany('Oral_Plus\DetallePedido');
    }

    public function scopeObtenerProveedor($query, $proveedor)
    {
        if(trim($proveedor) != "")
        {
            return $query->whereHas('proveedor', function($q) use ($proveedor)
            {
                $q->where('nombre', "LIKE", "%$proveedor%");
            });


        }
    }



}
