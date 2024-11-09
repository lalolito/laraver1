<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    // Asegúrate de que el nombre de la tabla sea plural (por convención de Laravel)
    protected $table = 'estudiantes';  // Cambié 'estudiante' a 'estudiantes'

    // Asegúrate de definir los campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'correo',
        'telefono',
        'lenguaje'
    ];
}

