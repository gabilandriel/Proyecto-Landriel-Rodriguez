<?php

namespace App\Models;
use CodeIgniter\Model;

class ConsultaModelo extends Model
{
    protected $table = 'consulta';
    protected $primaryKey = 'id_consulta';
    protected $allowedFields = [
        'id_consulta', 'id_persona', 'descripcion', 'baja'
    ];
}
