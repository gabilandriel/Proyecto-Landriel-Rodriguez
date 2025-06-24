<?php

namespace App\Models;
use CodeIgniter\Model;

class facturaModelo extends Model
{
    protected $table = 'factura';
    protected $primaryKey = 'id_factura';
    protected $allowedFields = [
        'id_factura', 'id_usuario','fecha', 'importe_total', 'baja'
    ];
}   