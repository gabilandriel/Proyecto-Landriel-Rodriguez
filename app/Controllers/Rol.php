<?php

namespace App\Controllers;
use App\Models\rolModelo;

class Rol extends BaseController
{
    public function index()
    {
        $modelo = new rolModelo();
        $data['rol'] = $modelo->findAll();

        return view('rol/index', $data);
    }
}