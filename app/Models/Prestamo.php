<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;
    public function Cliente(){
        return $this->belongsTo(Cliente::class);
    }
    public function Copia(){
        return $this->belongsTo(Copia::class);
    }
}
