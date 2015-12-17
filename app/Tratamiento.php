<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    protected $table = 'tratamientos';

    protected $fillable = ['nombre', 'valor', 'sesiones'];


    public function detalle_diagnostico()
    {
        return $this->hasMany('Oral_Plus\Detalle_diagnostico');
    }

    public function detalle_insumos()
    {
        return $this->hasMany('Oral_Plus\Detalle_Insumo');
    }





    public function scopeNombre($query, $nombre)
    {
        if(trim($nombre) != "")
        {
            $query->where('nombre', 'LIKE', "%$nombre%");
        }
    }
}
