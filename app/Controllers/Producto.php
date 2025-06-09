<?php

namespace App\Controllers;
use App\Models\productoModelo;

class Producto extends BaseController
{
    public function index()
    {
        $modelo = new productoModelo();
        $data['producto'] = $modelo->findAll();

        return view('producto/index', $data);
    }
}