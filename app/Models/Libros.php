<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Libros extends Model
{
    use HasFactory;
    use SoftDeletes;
    //public $timestamps = false;

    public function clientes()
    {
        return $this->belongsToMany(Clientes::class, 'clientes_libros', 'libro_id', 'cliente_id');
    }

    public function setNombreAttribute($value)
    {
        $this->attributes['nombre'] = ucfirst(strtolower($value));
    }
}
