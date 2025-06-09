<?php

namespace App\Controllers;
use App\Models\facturaModelo;

class Factura extends BaseController
{
    public function index()
    {
        $modelo = new facturaModelo();
        $data['factura'] = $modelo->findAll();

        return view('factura /index', $data);
    }
}