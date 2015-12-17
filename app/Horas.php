<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Horas extends Model
{

    protected $table    = 'horas';

    protected $fillable = ['id_consulta', 'id_intervencion', 'id_user', 'fecha', 'hora', 'estado'];


    public function user_especialista()
    {
        return $this->belongsTo('Oral_Plus\User','id_user', ['fecha', 'hora']);
    }

    public function consulta()
    {
        return $this->belongsTo('Oral_Plus\User', 'id_consulta', ['fecha', 'hora']);
    }

    public function intervencion()
    {
        return $this->belongsTo('Oral_Plus\Intervencion', 'id_intervencion', ['fecha', 'hora']);
    }


}
