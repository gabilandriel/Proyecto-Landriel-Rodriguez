<!DOCTYPE html> 
<html lang="es"> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet"> 
        <link href="<?= base_url('assets/css/miestilo.css') ?>" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> 
        <style> 
            body { 
                background-color: #f8f9fa; 
                font-family: 'Poppins', sans-serif; 
            } 
            .content-container { 
                background: #fff; 
                margin: 2rem auto; 
                padding: 2rem; 
                border-radius: 12px; 
                box-shadow: 0 0 20px rgba(0,0,0,0.05); 
                max-width: 1000px; 
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
                <h3 class="mb-4 text-center">
                    <i class="bi bi-envelope-exclamation me-2"></i>Consultas recibidas  
                </h3> 
            <?php if (session()->getFlashdata('mensaje')): ?>
                <div class="alert alert-success"><?= session()->getFlashdata('mensaje') ?></div>
            <?php endif; ?> 
            <table class="table table-bordered table-hover align-middle"> 
                <thead class="table-dark"> 
                    <tr> 
                        <th>Nombre</th> 
                        <th>Correo</th> 
                        <th>Mensaje</th> 
                        <th class="text-center">Acciones</th> 
                    </tr> 
                </thead> 
                <tbody> 
                    <?php foreach ($consultas as $consulta): ?> 
                        <tr> 
                                <td><?= esc($consulta['nombre']) ?>
                            </td> 
                            <td><?= esc($consulta['correo']) ?></td> 
                            <td><?= esc($consulta['descripcion']) ?></td> 
                            <td class="text-center"> 
                                <a href="<?= base_url('admin/consultas/leido/' . $consulta['id_consulta']) ?>" class="btn btn-sm btn-success"> 
                                    <i class="bi bi-check-circle me-1"></i> Marcar como leído 
                                </a> 
                            </td> 
                        </tr> 
                    <?php endforeach; ?> 
                </tbody> 
            </table> 
            <div class="text-end mt-3"> 
                <a href="<?= base_url('admin/consultas/leidas') ?>" class="btn btn-outline-secondary"> 
                    <i class="bi bi-eye me-1"></i> Ver consultas leídas 
                </a> 
            </div> 
        </div> 
        <?= view('templates/footer') ?> 
    </body> 
</html>   
