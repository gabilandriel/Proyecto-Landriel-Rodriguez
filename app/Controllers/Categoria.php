<?php

namespace App\Controllers;
use App\Models\categoriaModelo;

class Categoria extends BaseController
{
    public function index()
    {
        $modelo = new categoriaModelo();
        $data['categoria'] = $modelo->findAll();

        return view('categoria/index', $data);
    }
}
