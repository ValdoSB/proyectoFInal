<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Clientes extends Model
{
    use HasFactory;
    use SoftDeletes;
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

    public function setClientNameAttribute($value)
    {
        $this->attributes['clientName'] = ucfirst(strtolower($value));
    }
    
}
