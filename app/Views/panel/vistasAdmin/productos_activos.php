<!DOCTYPE html> 
<html lang="es"> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Productos Activos</title> 
        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet"> 
        <link href="<?= base_url('assets/css/miestilo.css') ?>" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> 
        <style> 
            body { 
                font-family: 'Poppins', sans-serif; 
                background-color: #f8f9fa; 
            } 
            .content-container { 
                background-color: #fff; 
                padding: 2rem; 
                margin-top: 2rem; 
                border-radius: 1rem; 
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.05); 
            } 
            .btn { 
                font-size: 0.875rem; 
                font-weight: 500; 
                border-radius: 0.5rem; 
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
            <div class="mb-3"> 
                <a href="<?= base_url('panel/admin') ?>" class="btn btn-outline-dark"> 
                    <i class="bi bi-arrow-left-circle me-1"></i> Volver al panel 
                </a> 
            </div> 
            <div class="d-flex justify-content-between align-items-center mb-4"> 
                <h3>
                    <i class="bi bi-box-seam me-2"></i>
                    Productos Activos
                </h3> 
                <a href="<?= base_url('admin/productos/crear') ?>" class="btn btn-dark"> 
                    <i class="bi bi-plus-circle me-1"></i> 
                    Agregar nuevo producto 
                </a> 
            </div> 
            <?php if (session()->getFlashdata('mensaje')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('mensaje') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
                </div>
            <?php endif; ?>
            <?php if (!empty($productos)): ?>
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Imagen</th>
                        <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($productos as $producto): ?>
                        <tr>
                            <td><?= esc($producto['nombre']) ?></td>
                            <td>$<?= number_format($producto['precio'], 2, ',', '.') ?></td>
                            <td><?= esc($producto['cantidad']) ?></td>
                            <td>
                            <img src="<?= base_url('assets/img/' . $producto['url_imagen']) ?>" alt="imagen" style="width: 60px; height: auto; border-radius: 6px;">
                            </td>
                            <td class="text-center">
                            <a href="<?= base_url('admin/productos/editar/' . $producto['id_producto']) ?>" class="btn btn-sm btn-primary me-1">
                                <i class="bi bi-pencil-square"></i> Editar
                            </a>
                            <a href="<?= base_url('admin/productos/baja/' . $producto['id_producto']) ?>" class="btn btn-sm btn-danger">
                                <i class="bi bi-x-circle"></i> Dar de baja
                            </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="text-end mt-4">
                    <a href="<?= base_url('admin/productos/bajas') ?>" class="btn btn-outline-secondary">
                        <i class="bi bi-eye-slash me-1"></i> Ver productos dados de baja
                    </a>
                </div>
            <?php else: ?>
                <div class="alert alert-info text-center">
                    <i class="bi bi-info-circle me-1"></i> No hay productos activos actualmente.
                </div>
            <?php endif; ?> 
        </div> 
        <?= view('templates/footer') ?> 
        <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script> 
    </body> 
</html>


            
