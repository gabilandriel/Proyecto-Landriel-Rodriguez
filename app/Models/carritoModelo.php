<?php 

namespace App\Models; 
use CodeIgniter\Model; 

class CarritoModelo extends Model { 
    protected $table = 'carrito'; 
    protected $primaryKey = 'id_carrito'; 
    protected $allowedFields = ['id_usuario', 'id_producto', 'cantidad']; 
} 