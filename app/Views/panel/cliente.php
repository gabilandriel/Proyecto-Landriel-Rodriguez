<!DOCTYPE html> 
<html lang="es"> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet"> 
        <link href="<?= base_url('assets/css/miestilo.css') ?>" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> 
        <title>Mi Panel</title> 
    </head> 
    <body> 
        <?= view('templates/header') ?> 
        <div class="container mt-5"> 
            <div class="card shadow-sm"> 
                <div class="card-body"> 
                    <?php if (session()->getFlashdata('mensaje')): ?> 
                        <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                            <?= session()->getFlashdata('mensaje') ?> 
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button> 
                        </div> 
                    <?php endif; ?>
                    <h3 class="mb-4 text-center">Bienvenido, <?= esc($cliente['nombre_usuario']) ?></h3>
                    <h5>Mis datos personales</h5>
                    <ul class="list-group mb-4">
                        <li class="list-group-item"><strong>Nombre:</strong> <?= esc($cliente['nombre']) ?> <?= esc($cliente['apellido']) ?></li>
                        <li class="list-group-item"><strong>Usuario:</strong> <?= esc($cliente['nombre_usuario']) ?></li>
                        <li class="list-group-item"><strong>DNI:</strong> <?= esc($cliente['dni']) ?></li>
                        <li class="list-group-item"><strong>Dirección:</strong> <?= esc($cliente['direccion']) ?></li>
                    </ul>
                    <div class="d-flex justify-content-between"> 
                        <a href="<?= base_url('panel/cliente-compras') ?>" class="btn btn-outline-dark"> 
                            <i class="bi bi-clock-history me-1"></i> 
                            Ver historial de compras 
                        </a> 
                        <a href="<?= base_url('cliente/editar') ?>" class="btn btn-primary"> 
                            <i class="bi bi-pencil-square me-1"></i> 
                            Editar mis datos 
                        </a> 
                    </div>
                </div>
            </div> 
        </div> 
        <?= view('templates/footer') ?> 
    </body> 
</html>
    