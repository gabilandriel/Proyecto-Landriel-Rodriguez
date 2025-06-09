<?php

namespace App\Controllers;
use App\Models\detalleFacturaModelo;

class DetalleFactura extends BaseController
{
    public function index()
    {
        $modelo = new detallleFacturaModelo();
        $data['detalle_factura'] = $modelo->findAll();

        return view('detalle_factura/index', $data);
    }
}
