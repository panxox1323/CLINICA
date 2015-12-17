<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $fila = 'consltas';

    protected $fillable = ['fecha', 'hora', 'estado', 'valor_consulta', 'id_usuario', 'id_especialista'];



    public function user()
    {
        return $this->belongsTo('Oral_Plus\User', 'id_usuario', 'id');
    }

    public function especialista()
    {
       return $this->belongsTo('Oral_Plus\User', 'id_especialista', 'id');
    }


    public function detalle_consulta()
    {
        return $this->hasMany('Oral_Plus\Detalle_consulta');
    }

}
