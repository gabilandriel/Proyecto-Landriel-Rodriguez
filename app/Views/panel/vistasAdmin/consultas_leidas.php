<!DOCTYPE html> 
<html lang="es"> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
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
        <main class="flex-grow-1">
            <div class="container content-container"> 
                <h3 class="mb-4 text-center">
                    <i class="bi bi-envelope-check me-2"></i>Consultas leídas
                </h3> 
                <table class="table table-bordered table-hover align-middle"> 
                    <thead class="table-dark"> 
                        <tr> 
                            <th>Nombre</th> 
                            <th>Correo</th> 
                            <th>Mensaje</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        <?php foreach ($consultas as $consulta): ?> 
                            <tr> 
                                <td>
                                    <?= esc($consulta['nombre']) ?>
                                </td> 
                                <td>
                                    <?= esc($consulta['correo']) ?>
                                </td> 
                                <td>
                                    <?= esc($consulta['descripcion']) ?>
                                </td> 
                            </tr> 
                        <?php endforeach; ?> 
                    </tbody> 
                </table> 
                <div class="text-end mt-3"> 
                    <a href="<?= base_url('admin/consultas') ?>" class="btn btn-secondary"> 
                        <i class="bi bi-arrow-left me-1"></i> Volver a consultas sin leer 
                    </a> 
                </div> 
            </div> 
        </main>
        <?= view('templates/footer') ?> 
    </body> 
</html>