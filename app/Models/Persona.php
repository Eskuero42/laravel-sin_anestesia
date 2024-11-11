<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = [
        'carnet',
        'nombres',
        'apellido_paterno',
        'apellido_materno',
        'correo',
        'fecha_nacimiento',
        'domicilio',
        'telefono',
        'celular',
    ];
}


