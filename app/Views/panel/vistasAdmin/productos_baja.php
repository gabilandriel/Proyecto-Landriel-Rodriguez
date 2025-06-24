<!DOCTYPE html> 
<html lang="es"> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet"> 
        <link href="<?= base_url('assets/css/miestilo.css') ?>" rel="stylesheet"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"> 
        <title>Productos dados de baja</title> 
        <style> 
            html, body { 
                height: 100%; 
                margin: 0; 
            }
            .main{
                flex: 1;
            }
            body { 
                background-color: #f8f9fa; 
                font-family: 'Poppins', sans-serif; 
                display: flex;
                flex-direction: column;
            } 
            .content-container { 
                background: #fff; 
                padding: 2rem; 
                margin-top: 2rem; 
                border-radius: 12px; 
                box-shadow: 0 0 20px rgba(0,0,0,0.05); 
            } 
            .table th { 
                background-color: #212529; 
                color: #fff; 
            } 
            .btn { 
                font-size: 0.875rem; 
                padding: 6px 12px; 
            } 
        </style> 
    </head> 
    <body> 
        <?= view('templates/header') ?> 
        <main class="flex-grow-1">
        <div class="container content-container"> 
            <h3 class="mb-4 text-center"> 
                <i class="bi bi-box-seam me-2"></i>
                Productos dados de baja 
            </h3> 
            <?php if (session()->getFlashdata('mensaje')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('mensaje') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
                </div>
            <?php endif; ?> 
            <?php if (!empty($productosBaja)): ?>
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($productosBaja as $producto): ?>
                        <tr>
                            <td><?= esc($producto['nombre']) ?></td>
                            <td><?= esc($producto['categoria']) ?></td>
                            <td>$<?= number_format($producto['precio'], 2, ',', '.') ?></td>
                            <td><?= esc($producto['cantidad']) ?></td>
                            <td class="text-center">
                            <a href="<?= base_url('admin/productos/editar/' . $producto['id_producto']) ?>" class="btn btn-primary btn-sm">
                                <i class="bi bi-pencil-square"></i> Editar
                            </a>
                            <?php if ($producto['cantidad'] > 0): ?>
                                <a href="<?= base_url('admin/productos/reactivar/' . $producto['id_producto']) ?>" class="btn btn-success btn-sm">
                                    <i class="bi bi-check-circle"></i> Reactivar
                                </a>
                            <?php else: ?>
                                <button class="btn btn-secondary btn-sm" disabled title="Stock insuficiente">
                                    <i class="bi bi-x-circle"></i> Sin stock
                                </button>
                            <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="alert alert-info text-center">
                    <i class="bi bi-info-circle me-1"></i> No hay productos dados de baja.
                </div>
            <?php endif; ?> 
            <div class="text-end mt-3"> 
                <a href="<?= base_url('admin/productos') ?>" class="btn btn-secondary"> 
                    <i class="bi bi-arrow-left"></i> 
                    Volver a productos activos 
                </a>
             </div> 
            </div> 
          </main>
        <?= view('templates/footer') ?> 
        <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script> 
    </body> 
</html>


