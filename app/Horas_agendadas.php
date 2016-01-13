<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Horas_agendadas extends Model
{
    protected $table    = 'horas_agendadas';

    protected $fillable = ['id_especialista', 'id_usuario', 'id_horas', 'fecha', 'id_det_diagnostico'];




    public function detalle_diagnostico()
    {
        return $this->belongsTo('Oral_Plus\Detalle_diagnosticoo', 'id_det_diagnostico', 'id');
    }

    public function userUsuario()
    {
        return $this->belongsTo('Oral_Plus\User', 'id_usuario', 'id');
    }

    public function obtenerHora()
    {
        return $this->belongsTo('Oral_Plus\Hora', 'id_horas', 'id');
    }

    public function userEspecialista()
    {
        return $this->belongsTo('Oral_Plus\User', 'id_especialista', 'id');
    }


    public function scopeName($query, $name)
    {
        if (trim($name) != "" && isset($name)) {

            return $query->whereHas('userUsuario', function($q) use($name)
            {
                $q->where(DB::raw("CONCAT(first_name, ' ', last_name)"), "LIKE", "%$name%");
            });


        }
    }

    public function scopeFecha($query, $fecha)
    {
        if(trim($fecha) != "" && isset($fecha))
        {
            $query->where('fecha', $fecha);
        }
    }

    public function scopeEspecialista($query, $especialista)
    {
        if(trim($especialista) != "" && isset($especialista))
        {
            $query->where('id_especialista', $especialista);
        }
    }

}
