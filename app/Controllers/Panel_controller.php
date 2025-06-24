<?php

namespace App\Controllers;
use App\Models\usuarioModelo;
use App\Models\facturaModelo;

class Panel_controller extends BaseController
{
    public function admin()
    {
        $usuarioModel = new \App\Models\usuarioModelo();
        $admin = $usuarioModel
            ->where('id_usuario', session('id_usuario'))
            ->first();
        return view('panel/admin', ['admin' => $admin]);
    }
    
    public function historialAdmin()
    {
        $facturaModel = new facturaModelo();
        $usuarioModel = new usuarioModelo();

        $facturas = $facturaModel
            ->select('factura.*, usuario.nombre, usuario.apellido')
            ->join('usuario', 'usuario.id_usuario = factura.id_usuario')
            ->where('factura.baja', 'NO')
            ->findAll();

        return view('panel/vistasAdmin/historial_admin', ['facturas' => $facturas]);
    }

    public function cliente()
    {
        $usuarioModel = new usuarioModelo();
        $cliente = $usuarioModel->find(session('id_usuario'));

        return view('/panel/cliente', ['cliente' => $cliente]);
    }

    public function editarCliente()
    {
        $usuarioModel = new usuarioModelo();
        $cliente = $usuarioModel->find(session('id_usuario'));

        return view('/panel/vistasCliente/editar', ['cliente' => $cliente]);
    }
    public function actualizarCliente()
    {
        $usuarioModel = new usuarioModelo();
        $usuarioModel->update(session('id_usuario'),    
                [
                'nombre' => $this->request->getPost('nombre'),
                'apellido' => $this->request->getPost('apellido'),
                'direccion' => $this->request->getPost('direccion'),
                'dni' => $this->request->getPost('dni'),
                'nombre_usuario' => $this->request->getPost('nombre_usuario'),
                ]);
        $session = session();
        $session->setFlashdata('mensaje', 'Datos actualizados con éxito');
        return redirect()->to('/panel/cliente');       
    }
    public function historialComprasCliente()
    {
    $facturaModel = new facturaModelo();
    $facturas = $facturaModel
    ->where('id_usuario', session('id_usuario'))
    ->where('baja', 'NO')
    ->orderBy('fecha', 'DESC')
    ->findAll();
    return view('panel/vistasCliente/historial_cliente', ['facturas' => $facturas]);
    }
}