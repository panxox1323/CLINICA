<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    protected $table    = 'pagos';

    protected $fillable = ['fecha', 'monto', 'user_id'];

    public function user()
    {
        return $this->belongsTo('Oral_Plus\User','user_id', 'id');
    }

    public function scopeFecha($query, $fecha)
    {
        if(trim($fecha) != '' && isset($fecha))
        {
            $query->where('fecha', $fecha);
        }

    }


    public function scopePaciente($query, $paciente)
    {
        if(trim($paciente) != "" && isset($paciente))
        {
            return $query->whereHas('user', function ($q) use ($paciente)
            {
                $q->where('id', $paciente);
            });
        }
    }
}
