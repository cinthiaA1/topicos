<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    protected $fillable = [
        'matricula',
        'nombre',
        'fecha_nacimiento',
        'telefono',
        'email',
    ];
    use HasFactory;
}
