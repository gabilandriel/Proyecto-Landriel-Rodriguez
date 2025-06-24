<?php

namespace App\Models;
use CodeIgniter\Model;

class detalleFacturaModelo extends Model
{
    protected $table = 'detalle_factura';
    protected $primaryKey = 'id_detalle_factura';
    protected $allowedFields = [
        'id_detalle_factura', 'id_factura', 'id_producto', 'cantidad', 'subtotal', 'baja'
    ];
}