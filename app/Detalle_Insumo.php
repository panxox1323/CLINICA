<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Detalle_Insumo extends Model
{
    protected $fila = 'detalle_insumos';

    protected $fillable = ['id_tratamiento', 'id_insumo', 'cantidad', 'valor'];


    public function tratamiento()
    {
        return $this->belongsTo('Oral_Plus/Tratamientos', 'id_tratamiento', 'id');
    }

    public function insumo()
    {
        return $this->belongsTo('Oral_Plus/Insumo', 'id_insumo', 'id');
    }
}
