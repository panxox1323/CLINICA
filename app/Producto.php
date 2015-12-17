<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';

    protected $fillable = ['nombre', 'precio', 'descripcion'];


    public function scopeNombre($query, $nombre)
    {
        if(trim($nombre) != "")
        {
            $query->where('nombre',"LIKE", "%$nombre%");
        }

    }
}
