<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $file = 'proveedors';

    protected $fillable = ['nombre', 'direccion', 'telefono', 'email', 'giro', 'ciudad'];



    public function facturas()
    {
        return $this->hasMany('Oral_Plus\Factura');
    }

    public function pedido()
    {
        return $this->hasMany('Oral_Plus\Pedidos');
    }

    public function detalle_pedido()
    {
        return $this->hasMany('Oral_Plus\DetallePedido');
    }


    public function scopeNombre($query, $nombre)
    {
        if(trim($nombre) != ""){
            $query->where('nombre',"LIKE", "%$nombre%");
        }
    }

    public function scopeGiro($query, $giro)
    {
        $types = config('options.tipoGiroProveedor');

        if($giro != "" && isset($types[$giro]))
        {
            $query->where('giro', '=', $giro);
        }
    }

}
