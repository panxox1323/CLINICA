<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    protected $table = 'diagnosticos';

    protected $fillable = ['id_especialista', 'id_usuario', 'fecha', 'total', 'estado'];


    public function userEspecialista ()
    {
        return $this->belongsTo('Oral_Plus\User', 'id_especialista', 'id');
    }

    public function userUsuario()
    {
        return $this->belongsTo('Oral_Plus\User', 'id_usuario', 'id');
    }

    public function detalle_diagnostico()
    {
        return $this->hasMany('Oral_Plus\Detalle_diagnostico');
    }


    public function scopeName($query, $name)
    {

        if(trim($name) != '' && isset($name))
        {
            return $query->whereHas('userUsuario', function($q) use ($name)
            {
                $q->where('first_name', "LIKE",  "%$name%");
            });

        }

    }

    public function scopeEspecialista($query, $especialista)
    {
        if(trim($especialista) != '' && isset($especialista))
        {
            return $query->whereHas('userEspecialista', function($q) use ($especialista)
            {
                $q->where('id', $especialista);
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

    public function scopePaciente($query, $paciente)
    {
        if(trim($paciente) != "" && isset($paciente))
        {
            return $query->whereHas('userUsuario', function($q) use ($paciente)
            {
                $q->where('id', $paciente);
            });

        }
    }

}
