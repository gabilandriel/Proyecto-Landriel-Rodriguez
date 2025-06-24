<!DOCTYPE html> 
<html lang="es"> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet"> 
        <link href="<?= base_url('assets/css/miestilo.css') ?>" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> 
        <title>Historial de Compras</title> 
        <style> 
            body { 
                font-family: 'Poppins', sans-serif; 
                background-color: #f8f9fa; 
            } 
            .content-container { 
                background: #fff; 
                margin-top: 2rem; 
                padding: 2rem; border-radius: 12px; 
                box-shadow: 0 0 20px rgba(0,0,0,0.05); 
            } 
            .table th { 
                background-color: #212529; 
                color: #fff; 
            } 
        </style> 
    </head> 
    <body> 
        <?= view('templates/header') ?> 
        <div class="container content-container"> 
            <h3 class="mb-4 text-center">
                <?php if (session()->getFlashdata('mensaje')): ?> 
                    <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                        <?= session()->getFlashdata('mensaje') ?> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
                     </div> 
                <?php endif; ?>
                <i class="bi bi-receipt me-2"></i>
                Mi Historial de Compras
            </h3> 
            <?php if (!empty($facturas)): ?>
                <table class="table table-bordered table-hover align-middle">
                    <thead>
                        <tr>
                        <th>ID Factura</th>
                        <th>Fecha</th>
                        <th>Importe Total</th>
                        <th class="text-center">PDF</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($facturas as $factura): ?>
                        <tr>
                            <td><?= esc($factura['id_factura']) ?></td>
                            <td><?= esc($factura['fecha']) ?></td>
                            <td>$<?= number_format($factura['importe_total'], 2, ',', '.') ?></td>
                            <td class="text-center">
                            <a href="<?= base_url('factura/pdf/' . $factura['id_factura']) ?>" class="btn btn-outline-dark btn-sm" target="_blank">
                                <i class="bi bi-filetype-pdf me-1"></i> Ver PDF
                            </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php else: ?>
                    <div class="alert alert-info text-center">
                        <i class="bi bi-info-circle me-1"></i> Aún no realizaste ninguna compra.
                    </div>
                <?php endif; ?> 
            <div class="text-end mt-3"> 
                <a href="<?= base_url('panel/cliente') ?>" class="btn btn-secondary"> 
                    <i class="bi bi-arrow-left me-1"></i>
                    Volver al panel 
                </a> 
            </div> 
        </div> 
        <?= view('templates/footer') ?> 
        <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script> 
    </body> 
</html>
