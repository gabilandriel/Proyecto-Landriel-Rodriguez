<?php

namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = [
        'id_persona', 'id_rol', 'nombre_usuario', 'pass_usuario', 'baja'
    ];
}
