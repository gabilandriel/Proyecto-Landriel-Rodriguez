<?php

namespace App\Controllers;
use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        helper(['form']);
        return view('auth/login');
    }

    public function loginPost()
    {
        helper(['form']);
        $session = session();
        $model = new UsuarioModel();

        $nombre_usuario = $this->request->getPost('nombre_usuario');
        $pass_usuario = $this->request->getPost('pass_usuario');

        $usuario = $model->where('nombre_usuario', $nombre_usuario)
                         ->where('baja', 'NO')
                         ->first();

        if ($usuario) {
            if (password_verify($pass_usuario, $usuario['pass_usuario'])) {
                $session->set([
                    'id_usuario' => $usuario['id_usuario'],
                    'nombre_usuario' => $usuario['nombre_usuario'],
                    'id_rol' => $usuario['id_rol'],
                    'isLoggedIn' => true
                ]);
                return redirect()->to('/'); // redirecciona donde quieras
            } else {
                return redirect()->back()->with('error', 'Contraseña incorrecta');
            }
        } else {
            return redirect()->back()->with('error', 'Usuario no encontrado o dado de baja');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
