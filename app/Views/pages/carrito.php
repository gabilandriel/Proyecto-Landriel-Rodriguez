<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/miestilo.css') ?>" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;    
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column; 
        }
        .main{
            flex: 1;
        }
        .content-container {
            background-color: #fff;
            padding: 2rem;
            margin-top: 2rem;
            border-radius: 1rem;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
        }
        .table th {
            background-color: #212529;
            color: #fff;
        }
    </style>
    <title>Mi Carrito</title>
    </head>
    <body>

    <?= view('templates/header') ?>
    <main class="flex-grow-1">    
        <div class="container content-container">
        <h3 class="mb-4 text-center"><i class="bi bi-cart3 me-2"></i>Mi Carrito de Compras</h3>

        <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('msg') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>
        <?php endif; ?>

        <?php if (!empty($carrito)): ?>
            <table class="table table-hover align-middle">
            <thead>
                <tr>
                <th>Producto</th>
                <th>Precio Unitario</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $total = 0; ?>
                <?php foreach ($carrito as $item): ?>
                <?php $subtotal = $item['precio'] * $item['cantidad']; ?>
                <?php $total += $subtotal; ?>
                <tr>
                    <td><?= esc($item['nombre']) ?></td>
                    <td>$<?= number_format($item['precio'], 2, ',', '.') ?></td>
                    <td><?= esc($item['cantidad']) ?></td>
                    <td>$<?= number_format($subtotal, 2, ',', '.') ?></td>
                    <td class="text-center">
                    <a href="<?= base_url('carrito/eliminar/' . $item['id_producto']) ?>" class="btn btn-danger btn-sm">
                        <i class="bi bi-trash"></i> Quitar
                    </a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <tr>
                <td colspan="3" class="text-end fw-bold">Total:</td>
                <td class="fw-bold">$<?= number_format($total, 2, ',', '.') ?></td>
                <td></td>
                </tr>
            </tbody>
            </table>

            <div class="text-end mt-3">
            <a href="<?= base_url('catalogo') ?>" class="btn btn-secondary me-2">
                <i class="bi bi-arrow-left"></i> Seguir comprando
            </a>
            <a href="<?= base_url('carrito/vaciar') ?>" class="btn btn-outline-danger"> 
                <i class="bi bi-x-circle"></i> Vaciar carrito 
            </a>
            <a href="<?= base_url('carrito/finalizar') ?>" class="btn btn-success">
                <i class="bi bi-cash-coin"></i> Finalizar compra
            </a>
            </div>
        <?php else: ?>
            <div class="alert alert-info text-center">
            <i class="bi bi-info-circle me-1"></i> Tu carrito está vacío. <a href="<?= base_url('catalogo') ?>">Ir al catálogo</a>.
            </div>
        <?php endif; ?>
        </div>
    </main>
        <?= view('templates/footer') ?>
        <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    </body>
</html>
