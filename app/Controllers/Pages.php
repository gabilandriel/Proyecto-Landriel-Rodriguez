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

    public function informacion_de_contacto()
    {
        return view('pages/informacion-de-contacto');
    }

    public function login()
    {
        return view('back/login/login');
    }
}