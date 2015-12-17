<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $table = 'recetas';

    protected $fillable = ['medicamento_1', 'medicamento_2', 'medicamento_3', 'medicamento_4', 'medicamento_5', 'medicamento_6', 'medicamento_7'];


    public function intervencion()
    {
        return $this->hasOne('Oral_Plus\Intervencion');
    }

}
