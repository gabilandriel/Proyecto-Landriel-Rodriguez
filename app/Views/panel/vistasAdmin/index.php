<!DOCTYPE HTML>
<html lang="es">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/miestilo.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        html, body {
        height: 100%;
        margin: 0;    
        }

        body {
        background-color: #f8f9fa;
        font-family: 'Poppins', sans-serif;
        display: flex;
        flex-direction: column;
        }
        
        .main{
        flex: 1;
        }

        .page-title {
        font-weight: 600;
        margin-bottom: 30px;
        color: #343a40;
        }

        .table th {
        background-color: #212529;
        color: #fff;
        }

        .btn {
        font-size: 0.875rem;
        font-weight: 500;
        padding: 6px 12px;
        border-radius: 0.5rem;
        }

        .table td, .table th {
        vertical-align: middle;
        }

        .content-container {
        background-color: #fff;
        padding: 2rem;
        border-radius: 0.75rem;
        box-shadow: 0 0 20px rgba(0,0,0,0.05);
        margin-top: 2rem;
        }
    </style>
    </head>
    <body>

    <?= view('templates/header') ?>
    <main class="flex-grow-1">
        <div class="container content-container">
        <div class="mb-3"> 
            <a href="<?= base_url('panel/admin') ?>" class="btn btn-outline-dark"> 
                <i class="bi bi-arrow-left-circle me-1"></i> Volver al panel 
            </a> 
        </div>
        <h3 class="page-title text-center"><i class="bi bi-people-fill me-2"></i>Gestión de Usuarios Clientes</h3>

        <?php if (session()->getFlashdata('mensaje')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('mensaje') ?></div>
        <?php endif; ?>

        <table class="table table-hover align-middle">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>DNI</th>
                <th>Estado</th>
                <th class="text-center">Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($clientes as $cliente): ?>
                <tr>
                <td><?= esc($cliente['nombre']) ?> <?= esc($cliente['apellido']) ?></td>
                <td><?= esc($cliente['nombre_usuario']) ?></td>
                <td><?= esc($cliente['dni']) ?></td>
                <td>
                    <?php if ($cliente['baja'] === 'NO'): ?>
                    <span class="badge bg-success">Activo</span>
                    <?php else: ?>
                    <span class="badge bg-secondary">Baja</span>
                    <?php endif; ?>
                </td>
                <td class="text-center">
                    <a href="<?= base_url('admin/usuarios/editar/'.$cliente['id_usuario']) ?>" class="btn btn-primary me-1">
                    <i class="bi bi-pencil-square"></i> Editar
                    </a>
                    <?php if ($cliente['baja'] === 'NO'): ?>
                    <a href="<?= base_url('admin/usuarios/baja/'.$cliente['id_usuario']) ?>" class="btn btn-danger">
                        <i class="bi bi-x-circle"></i> Dar de baja
                    </a>
                    <?php else: ?>
                    <a href="<?= base_url('admin/usuarios/alta/'.$cliente['id_usuario']) ?>" class="btn btn-success">
                        <i class="bi bi-check-circle"></i> Reactivar
                    </a>
                    <?php endif; ?>
                </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <div class="text-end mt-4">
            <a href="<?= base_url('admin/usuarios/bajas') ?>" class="btn btn-outline-secondary">
                <i class="bi bi-eye-slash me-1"></i> Ver usuarios dados de baja
            </a>
        </div>
        </div>
    </main>
<?= view('templates/footer') ?>
</body>
</html>