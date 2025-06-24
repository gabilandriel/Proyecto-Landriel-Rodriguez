<?php

namespace App\Controllers;

use App\Models\usuarioModelo;

class Auth_controller extends BaseController
{
    public function loginPost()
    {
        $usuario = $this->request->getPost('nombre_usuario');
        $password = $this->request->getPost('pass_usuario');

        $modelo = new usuarioModelo();
        $datosUsuario = $modelo->where('nombre_usuario', $usuario)->first();

        if ($datosUsuario && password_verify($password, $datosUsuario['pass_usuario'])) {
            session()->set([
                'id_usuario' => $datosUsuario['id_usuario'],
                'nombre_usuario' => $datosUsuario['nombre_usuario'],
                'rol' => $datosUsuario['id_rol'],
                'logged_in' => true,
            ]);
            return redirect()->to('/');
        }

        return redirect()->back()->with('error', 'Usuario o contraseña incorrectos');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('msg', 'Sesión cerrada con éxito.');
    }
}
