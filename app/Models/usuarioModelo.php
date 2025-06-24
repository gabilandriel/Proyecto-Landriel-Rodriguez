<?php

namespace App\Models;
use CodeIgniter\Model;

class usuarioModelo extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = [
        'id_usuario', 
        'id_rol', 
        'nombre', 
        'apellido', 
        'dni', 
        'direccion',
        'nombre_usuario', 
        'pass_usuario', 
        'baja'
    ];
    protected $useSoftDeletes = false;
}
