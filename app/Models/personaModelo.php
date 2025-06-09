<?php

namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'personas';
    protected $primaryKey = 'id_persona';
    protected $allowedFields = [
        'id_persona', 'dni', 'nombre', 'apellido', 'correo', 'id_domicilio', 'baja'
    ];
}   