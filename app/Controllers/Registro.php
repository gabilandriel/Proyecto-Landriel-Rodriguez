<?php

namespace App\Controllers;

use App\Models\usuarioModelo;

class Registro extends BaseController
{
    public function index()
    {
        return view('pages/registro');
    }

    public function guardar()
    {
        $usuarioModelo = new UsuarioModelo();

        // Obtener campos del formulario
        $nombre           = $this->request->getPost('nombre');
        $apellido         = $this->request->getPost('apellido');
        $dni              = $this->request->getPost('dni');
        $direccion        = $this->request->getPost('direccion');
        $nombre_usuario   = $this->request->getPost('nombre_usuario');
        $pass             = $this->request->getPost('pass_usuario');
        $confirmar_pass   = $this->request->getPost('confirmar_pass');

        // Validaciones
        if ($pass !== $confirmar_pass) {
            return redirect()->back()->with('error', 'Las contraseñas no coinciden.');
        }

        if ($usuarioModelo->where('nombre_usuario', $nombre_usuario)->first()) {
            return redirect()->back()->with('error', 'El nombre de usuario ya está en uso.');
        }

        // Insertar en la BD
        $usuarioModelo->insert([
            'id_rol'         => 2,
            'nombre'         => $nombre,
            'apellido'       => $apellido,
            'dni'            => $dni,
            'direccion'      => $direccion,
            'nombre_usuario' => $nombre_usuario,
            'pass_usuario'   => $pass
        ]);

        return redirect()->to('/login')->with('success', 'Registro exitoso. Iniciá sesión.');
    }
}
