<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    use HasFactory;
    //public $timestamps = false;
    public function clientes()
    {
        return $this->belongsToMany(Clientes::class, 'clientes_libros', 'libro_id', 'cliente_id');
    }
}
