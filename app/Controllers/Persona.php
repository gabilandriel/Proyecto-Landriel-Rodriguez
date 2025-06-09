<?php

namespace App\Controllers;
use App\Models\personaModelo;

class Persona extends BaseController
{
    public function index()
    {
        $modelo = new personaModelo();
        $data['personas'] = $modelo->findAll();

        return view('personas/index', $data);
    }
}