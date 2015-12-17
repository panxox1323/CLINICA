<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{

    protected $table = 'turnos';

    protected $fillable = ['tipo','duracion','estado'];


    public function user()
    {
        return $this->hasOne('Oral_Plus\User');
    }
}
