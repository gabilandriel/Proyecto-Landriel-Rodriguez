<?php

namespace App\Models;
use CodeIgniter\Model;

class productoModelo extends Model
{
    protected $table = 'producto';
    protected $primaryKey = 'id_producto';
    protected $allowedFields = [
        'id_producto', 'id_categoria', 'nombre', 'descripcion', 'precio', 'cantidad', 'url_imagen', 'baja'
    ];
}   