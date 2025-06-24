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
        $nombre           = trim($this->request->getPost('nombre'));
        $apellido         = trim($this->request->getPost('apellido'));
        $dni              = trim($this->request->getPost('dni'));
        $direccion        = trim($this->request->getPost('direccion'));
        $nombre_usuario   = trim($this->request->getPost('nombre_usuario'));
        $pass             = trim($this->request->getPost('pass_usuario'));
        $confirmar_pass   = trim($this->request->getPost('confirmar_pass'));

        // Validar campos vacíos después de trim
        if ($nombre === '' || $apellido === '' || $nombre_usuario === '' || $dni === '' || $direccion === '') {
            return redirect()->back()->withInput()->with('error', 'Los campos no pueden estar vacíos ni contener solo espacios.');
        }
        // Validaciones de longitud mínima
        if (strlen($nombre_usuario) < 3) {
            return redirect()->back()->withInput()->with('error', 'El nombre de usuario debe tener al menos 3 caracteres.');
        }
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
