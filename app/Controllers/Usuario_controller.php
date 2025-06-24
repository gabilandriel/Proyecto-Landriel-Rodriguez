<?php

namespace App\Controllers;
use App\Models\usuarioModelo;

class Usuario_controller extends BaseController
{
    public function index()
    {
        $usuarioModel = new \App\Models\usuarioModelo();

        $clientes = $usuarioModel
            ->where('id_rol', 2)
            ->where('baja', 'NO')
            ->findAll();

        return view('panel\vistasAdmin\index', ['clientes' => $clientes]);
    }

    public function editar($id)
    {
        $modelo = new usuarioModelo();
        $cliente = $modelo->find($id);
        return view('panel\vistasAdmin\editar', ['cliente' => $cliente]);
    }

    public function actualizar($id)
    {
        $modelo = new usuarioModelo();
        $datos = $this->request->getPost();
        unset($datos['id_usuario']);
        $modelo->update($id, $datos);
        return redirect()->to('/admin/usuarios');
    }

    public function baja($id_usuario)
    {
        $usuarioModel = new usuarioModelo();

        $usuario = $usuarioModel->find($id_usuario);
        if ($usuario) {
            $usuarioModel->update($id_usuario, ['baja' => 'SI']);
            return redirect()->to(base_url('admin/usuarios'))->with('mensaje', 'Usuario dado de baja correctamente');
        }

        return redirect()->to(base_url('admin/usuarios'))->with('mensaje', 'Usuario no encontrado');
    }

    public function bajas()
    {
        $usuarioModel = new usuarioModelo();
        $clientesBaja = $usuarioModel
            ->where('id_rol', 2)
            ->where('baja', 'SI')
            ->findAll();

        return view('panel/vistasAdmin/baja', ['clientesBaja' => $clientesBaja]);

    }
    public function alta($id)
    {
        $modelo = new usuarioModelo();
        $modelo->update($id, ['baja' => 'NO']);
        return redirect()->to('/admin/usuarios');
    }
}
