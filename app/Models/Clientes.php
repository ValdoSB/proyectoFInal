<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
    //protected $table = "clientes";

    public function libros()
    {
        //Relacion M:N
        return $this->belongsToMany(Libros::class, 'clientes_libros', 'cliente_id', 'libro_id');
    }
    
    public function user()
    {
        //Relacion 1:N
        return $this->belongsTo(User::class);
    }
}
