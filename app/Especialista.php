<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Especialista extends Model
{
    protected $file = 'especialista';

    protected $nullable = ['run', 'nombres', 'apellidos', 'direccion', 'fecha_nac', 'telefono', 'fecha_contrato', 'titulo', 'id_especialidad'];

    public function getFullNameAttribute()
    {
        return $this->nombres . ' ' . $this->apellidos;
    }

    public function scopeName($query, $name)
    {
        if(trim($name) != ""){
            $query->where(\DB::raw("CONCAT(nombres, ' ', apellidos)"), "LIKE", "%$name%");
        }
    }



    public function scopeType($query, $type)
    {
        $types = config('options.tipoEspecialidad');

        if ($type != "" && isset($types[$type])) {
            $query->where('id_especialidad', '=', $type);
        }
    }
}
