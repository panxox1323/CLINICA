<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Iva extends Model
{
    protected $table = 'ivas';

    protected $fillable = ['porcentaje_iva', 'fecha_inicio', 'fecha_termino'];


    public function scopePorcentaje($query, $porcentaje)
    {
        if(trim($porcentaje) != "")
        {
            $query->where('porcentaje_iva', $porcentaje);
        }

    }
}
