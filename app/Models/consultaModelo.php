<?php

namespace App\Models;
use CodeIgniter\Model;

class consultaModelo extends Model
{
    protected $table = 'consulta';
    protected $primaryKey = 'id_consulta';
    protected $allowedFields = [
        'id_consulta', 'nombre','correo', 'descripcion', 'baja'
    ];
}
