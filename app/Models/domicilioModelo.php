<?php

namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'domicilio';
    protected $primaryKey = 'id_domicilio';
    protected $allowedFields = [
        'id_domicilio', 'calle', 'numero', 'codigo_postal', 'localidad', 'provincia', 'pais', 'baja'
    ];
}