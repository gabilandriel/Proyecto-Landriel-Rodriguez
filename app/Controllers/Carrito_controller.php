<?php

namespace App\Controllers;
use Dompdf\Dompdf;
use App\Models\facturaModelo;
use App\Models\detalleFacturaModelo;
use App\Models\productoModelo;

class Carrito_controller extends BaseController
{
    public function index()
    {
        $session = session();
        $carrito = $session->get('carrito') ?? [];
        return view('pages/carrito', ['carrito' => $carrito]);
    }
    public function agregar($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login')->with('msg', 'Debes iniciar sesión para agregar productos al carrito.');
        }

        $productoModel = new productoModelo();
        $producto = $productoModel->find($id);

        if (!$producto || $producto['cantidad'] <= 0) {
            return redirect()->back()->with('msg', 'Producto no disponible.');
        }

        $session = session();
        $carrito = $session->get('carrito') ?? [];

        if (isset($carrito[$id])) {
            $carrito[$id]['cantidad'] += 1;
        } else {
            $carrito[$id] = [
                'id_producto' => $producto['id_producto'],
                'nombre' => $producto['nombre'],
                'precio' => $producto['precio'],
                'cantidad' => 1
            ];
        }

        $productoModel->update($id, ['cantidad' => $producto['cantidad'] - 1]);

        $session->set('carrito', $carrito);

        return redirect()->to('/carrito')->with('msg', 'Producto agregado al carrito.');
    }

    public function eliminar($id)
    {
        $session = session();
        $carrito = $session->get('carrito') ?? [];

        if (isset($carrito[$id])) {
            $productoModel = new productoModelo();
            $productoModel->update($id, [
                'cantidad' => $productoModel->find($id)['cantidad'] + $carrito[$id]['cantidad']
            ]);

            unset($carrito[$id]);
            $session->set('carrito', $carrito);
        }

        return redirect()->to('/carrito')->with('msg', 'Producto eliminado del carrito.');
    }

    public function vaciar()
    {
        $session = session();
        $carrito = $session->get('carrito') ?? [];

        $productoModel = new productoModelo();
        foreach ($carrito as $item) {
            $productoModel->update($item['id_producto'], [
                'cantidad' => $productoModel->find($item['id_producto'])['cantidad'] + $item['cantidad']
            ]);
        }

        $session->remove('carrito');

        return redirect()->to('/carrito')->with('msg', 'Carrito vaciado.');
    }

    public function generarPDF($idFactura)
    {
        $facturaModel = new facturaModelo();
        $detalleModel = new detalleFacturaModelo();
        $productoModel = new productoModelo();

        $factura = $facturaModel->find($idFactura);
        $detalles = $detalleModel->where('id_factura', $idFactura)->findAll();

        if (!$factura) {
            return redirect()->back()->with('msg', 'Factura no encontrada.');
        }

        // Generamos el HTML del PDF
        $html = view('pages/pdf_factura', [
            'factura' => $factura,
            'detalles' => $detalles
        ]);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Descargar el PDF
        $dompdf->stream('factura_'.$idFactura.'.pdf', ['Attachment' => true]);

            
    }

    public function agregarPost($id)
    {
    if (!session()->get('logged_in')) {
    return redirect()->to('/login')->with('msg', 'Debes iniciar sesión para agregar productos al carrito.');
    }

    $cantidad = (int) $this->request->getPost('cantidad');
    if ($cantidad < 1) {
        return redirect()->back()->with('msg', 'Cantidad inválida.');
    }

    $productoModel = new productoModelo();
    $producto = $productoModel->find($id);

    if (!$producto || $producto['cantidad'] < $cantidad) {
        return redirect()->back()->with('msg', 'Stock insuficiente.');
    }

    $session = session();
    $carrito = $session->get('carrito') ?? [];

    if (isset($carrito[$id])) {
        $carrito[$id]['cantidad'] += $cantidad;
    } else {
        $carrito[$id] = [
            'id_producto' => $producto['id_producto'],
            'nombre' => $producto['nombre'],
            'precio' => $producto['precio'],
            'cantidad' => $cantidad
        ];
    }

    $productoModel->update($id, ['cantidad' => $producto['cantidad'] - $cantidad]);
    $session->set('carrito', $carrito);

    return redirect()->to('/carrito')->with('mensaje', 'Producto agregado al carrito.');

    }
    public function finalizar()
    {
        $session = session();
        $carrito = $session->get('carrito') ?? [];
        $idUsuario = $session->get('id_usuario'); 
        if (empty($carrito) || !$idUsuario) {
            return redirect()->to('/carrito')->with('msg', 'Tu carrito está vacío o no has iniciado sesión.');
        }
        $facturaModel = new facturaModelo();
        $detalleModel = new detalleFacturaModelo();

        $total = 0;
        foreach ($carrito as $item) {
            $total += $item['precio'] * $item['cantidad'];
        }

        // Crear la factura
        $facturaId = $facturaModel->insert([
            'id_usuario' => $idUsuario,
            'importe_total' => $total,
            'fecha' => date('Y-m-d'),
            'baja' => 'NO'
        ]);

        // Crear los detalles
        foreach ($carrito as $item) {
            $detalleModel->insert([
                'id_factura' => $facturaId,
                'id_producto' => $item['id_producto'],
                'cantidad' => $item['cantidad'],
                'subtotal' => $item['precio'] * $item['cantidad'],
                'baja' => 'NO'
            ]);
        }

        $session->remove('carrito');

        return redirect()->to('/panel/cliente-compras')->with('mensaje', 'Compra finalizada correctamente.');

    }
}  