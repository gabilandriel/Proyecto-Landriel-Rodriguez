<?php 

namespace App\Controllers; 
use Dompdf\Dompdf; 
use Dompdf\Options; 
use App\Models\facturaModelo; 
use App\Models\detalleFacturaModelo; 
use App\Models\usuarioModelo; 
use App\Models\productoModelo; 

class Factura_controller extends BaseController { 
    public function generarPDF($id) { 
        $facturaModel = new facturaModelo(); 
        $detalleModel = new detalleFacturaModelo(); 
        $usuarioModel = new usuarioModelo(); 
        $productoModel = new productoModelo(); 
        $factura = $facturaModel->find($id); 
        $usuario = $usuarioModel->find($factura['id_usuario']); 
        $detalles = $detalleModel->where('id_factura', $id)->findAll(); // Preparar el contenido HTML 
        $html = view('pages/pdf_factura', [ 'factura' => $factura, 'usuario' => $usuario, 'detalles' => $detalles ]); 
        $options = new Options(); $options->set('defaultFont', 'Poppins'); 
        $dompdf = new Dompdf($options); $dompdf->loadHtml($html); 
        $dompdf->setPaper('A4', 'portrait'); 
        $dompdf->render(); // Forzar descarga o abrir en navegador 
        $dompdf->stream('factura_' . $id . '.pdf', ['Attachment' => false]); 
    } 
} 