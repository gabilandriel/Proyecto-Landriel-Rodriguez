<?php

namespace App\Models;
use CodeIgniter\Model;

class rolModelo extends Model
{
    protected $table = 'rol';
    protected $primaryKey = 'id_rol';
    protected $allowedFields = [
        'id_rol', 'nombre', 'descripcion', 'baja'
    ];
}