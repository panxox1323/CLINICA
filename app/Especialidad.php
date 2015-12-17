<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Especialidad extends Model
{
    protected $table = 'especialidades';

    protected $fillable = ['especialidad'];


    public function user()
    {
        return $this->hasMany('Oral_Plus\User');
    }




    public function scopeEspecialidad($query, $especialidad)
    {
        $query->where('especialidad',"LIKE", "%$especialidad%");
    }
}
