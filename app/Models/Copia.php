<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copia extends Model
{
    use HasFactory;
    public function Prestamos(){
        return $this->hasMany(Prestamo::class);
    }
    public function Pelicula(){
        return $this->belongsTo(Pelicula::class);
    }
}
