<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('pages/pagina-principal');
    }

    public function comercializacion()
    {
        return view('pages/comercializacion');
    }

    public function quienes_somos()
    {
        return view('pages/quienes-somos');
    }

    public function terminos_y_usos()
    {
        return view('pages/terminos-y-usos');
    }
}