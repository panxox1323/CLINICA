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
        if(trim($name) != "") {
            $query->where('id_usuario', '=', $name);
        }
    }

}
