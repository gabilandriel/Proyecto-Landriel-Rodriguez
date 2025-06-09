<?php

namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'factura';
    protected $primaryKey = 'id_factura';
    protected $allowedFields = [
        'id_factura', 'id_usuario', 'importe_total', 'descuento', 'baja'
    ];
}   