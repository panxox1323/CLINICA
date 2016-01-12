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

    public function scopeEspecialista($query, $id_especialista)
    {
        if(trim($id_especialista) != '' && isset($id_especialista))
        {
            return $query->whereHas('userEspecialista', function($q) use ($id_especialista)
            {
                $q->where('id', $id_especialista);
            });

        }

    }

}
