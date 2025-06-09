<?php

namespace App\Controllers;
use App\Models\consultaModelo;

class Consulta extends BaseController
{
    public function index()
    {
        $modelo = new consultaModelo();
        $data['consulta'] = $modelo->findAll();

        return view('consulta/index', $data);
    }
}