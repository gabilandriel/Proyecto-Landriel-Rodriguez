<?php

namespace App\Controllers;
use App\Models\domicilioModelo;

class Domicilio extends BaseController
{
    public function index()
    {
        $modelo = new domicilioModelo();
        $data['domicilio'] = $modelo->findAll();

        return view('domicilio/index', $data);
    }
}