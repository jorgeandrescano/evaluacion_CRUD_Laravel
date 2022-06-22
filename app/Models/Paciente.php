<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $fillable = ['tipoDocumento','documento','nombres', 'apellidos', 'fechaNacimiento', 'genero', 'estadoCivil', 'direccion', 'telefono'];
}
