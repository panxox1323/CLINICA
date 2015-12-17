<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Detalle_diagnostico extends Model
{
    protected $table = 'detalle_diagnostico';

    protected $fillable = ['id_diagnostico', 'id_tratamiento', 'estado'];


    public function diagnostico()
    {
        return $this->belongsTo('Oral_Plus\Diagnostico', 'id_diagnostico', 'id');
    }

    public function tratamiento()
    {
        return $this->belongsTo('Oral_Plus\Tratamiento', 'id_tratamiento', 'id');
    }

    public function horas_agendadas()
    {
        return $this->hasMany('Oral_Plus\Horas_Agendadas');
    }


}
