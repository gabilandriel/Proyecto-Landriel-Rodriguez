<?php

namespace App\Controllers;
use App\Models\usuarioModelo;

class Login_controller extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);
        return view('pages/login');
    }

    public function auth()
    {
        $session = session();
        $model = new usuarioModelo();

        $usuario = $this->request->getPost('nombre_usuario');
        $clave   = $this->request->getPost('pass_usuario');

        $datos = $model->where('nombre_usuario', $usuario)->first();

        if ($datos) {
            $pass = $datos['pass_usuario']; 
            $baja = $datos['baja'];

            if ($baja === 'SI') {
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to('/login');
            }
            if ($clave === $pass) {
                $ses_data = [
                    'id_usuario'      => $datos['id_usuario'],
                    'id_rol'          => $datos['id_rol'],
                    'nombre_usuario'  => $datos['nombre_usuario'],
                    'logged_in'       => true,
                ];

                $session->set($ses_data);
                $session->setFlashdata('msg', 'Bienvenido ' . $datos['nombre_usuario']);

                return redirect()->to('/');
            } else {
                $session->setFlashdata('msg', 'Contraseña incorrecta');
                return redirect()->to('/login');
            }
        }else {
            $session->setFlashdata('msg', 'Usuario inválido o inexistente');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}

