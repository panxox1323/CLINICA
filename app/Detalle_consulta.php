<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Detalle_consulta extends Model
{
    protected $fila = 'detalle_consulta';

    protected $fillable = ['id_consulta', 'id_tratamiento', 'id_detalle_insumos', 'id_hora_agendada'];



    
    public function consulta()
    {
        return $this->belongsTo('Oral_Plus\Consulta', 'id_consulta', 'id');
    }


    public function tratamiento()
    {
        return $this->belongsTo('Oral_Plus\Tratamiento', 'id_tratamiento', 'id');
    }

    public function detalle_insumos()
    {
        return $this->belongsTo('Oral_Plus/Detalle_Insumo', 'id_detalle_insumo', 'id');
    }

    public function hora_agendada()
    {
       return $this->belongsTo('Oral_Plus\Horas_agendadas', 'id_hora_agendada', 'id');
    }

    public function scopeFiltrar($query)
    {

    }

}
