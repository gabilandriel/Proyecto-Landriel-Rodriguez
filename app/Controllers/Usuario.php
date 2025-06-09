<?php

namespace App\Controllers;
use App\Models\usuarioModelo;

class Usuario extends BaseController
{
    public function index()
    {
        $modelo = new UsuarioModel();
        $data['usuario'] = $modelo->findAll();

        return view('usuario/index', $data);
    }
}
