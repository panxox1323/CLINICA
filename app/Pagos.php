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

    public function scopeName($query, $name)
    {
        if(trim($name) != '' && isset($name))
        {
            return $query->whereHas('user', function($q) use ($name)
            {
                $q->where('first_name', "LIKE", "%$name%");
            });

        }

    }
}
