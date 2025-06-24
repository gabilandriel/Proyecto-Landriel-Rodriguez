<!DOCTYPE html> 
<html lang="es"> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet"> 
        <link href="<?= base_url('assets/css/miestilo.css') ?>" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> 
        <title>Editar mis datos</title> 
    </head> 
    <body> 
        <?= view('templates/header') ?> 
        <div class="container mt-5"> 
            <div class="card shadow-sm"> 
                <div class="card-body"> 
                    <h4 class="mb-4 text-center">Editar mis datos</h4>
                      <form method="post" action="<?= base_url('cliente/actualizar') ?>">
                        <div class="mb-3">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="<?= esc($cliente['nombre']) ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="apellido">Apellido</label>
                            <input type="text" name="apellido" class="form-control" value="<?= esc($cliente['apellido']) ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="direccion">Dirección</label>
                            <input type="text" name="direccion" class="form-control" value="<?= esc($cliente['direccion']) ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="nombre_usuario">Usuario</label>
                            <input type="text" name="nombre_usuario" class="form-control" value="<?= esc($cliente['nombre_usuario']) ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="dni">DNI</label>
                            <input type="text" name="dni" class="form-control" value="<?= esc($cliente['dni']) ?>" required>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">
                         <i class="bi bi-save me-1"></i> Guardar cambios
                        </button>
                    </form>
                </div>
            </div> 
        </div> 
        <?= view('templates/footer') ?> 
    </body> 
</html>
