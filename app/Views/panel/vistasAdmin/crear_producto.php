<!DOCTYPE html> 
<html lang="es"> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet"> 
        <link href="<?= base_url('assets/css/miestilo.css') ?>" rel="stylesheet"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"> 
        <title>Agregar nuevo producto</title> 
        <style> 
            body { 
                background-color: #f8f9fa; 
                font-family: 'Poppins', sans-serif; 
            } 
            .form-container { 
                max-width: 700px; 
                margin: 3rem auto; 
                background-color: #fff; 
                padding: 2rem; 
                border-radius: 1rem; 
                box-shadow: 0 0 20px rgba(0,0,0,0.05); 
            } 
            .form-title { 
                font-weight: 600; 
                margin-bottom: 1.5rem; 
                color: #343a40; 
                text-align: center; 
            } 
            .btn-dark { 
                width: 100%; 
                border-radius: 0.5rem; 
                padding: 10px; 
            } 
        </style> 
    </head> 
    <body> 
        <?= view('templates/header') ?> 
        <div class="container"> 
            <div class="form-container"> 
                <h3 class="form-title">
                    <i class="bi bi-box-seam me-2"></i>
                    Agregar nuevo producto
                </h3>
                <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                <?php endif; ?>
                <form method="post" action="<?= base_url('admin/productos/guardar') ?>" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del producto</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea name="descripcion" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" name="precio" step="0.01" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="cantidad" class="form-label">Stock</label>
                        <input type="number" name="cantidad" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="id_categoria" class="form-label">Categoría</label>
                        <select name="id_categoria" class="form-select" required>
                        <?php foreach ($categorias as $categoria): ?>
                            <option value="<?= $categoria['id_categoria'] ?>"><?= esc($categoria['nombre']) ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="url_imagen" class="form-label">Imagen del producto</label>
                        <input type="file" name="url_imagen" class="form-control" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-dark">
                        <i class="bi bi-plus-circle me-1"></i> Guardar producto
                    </button>
                </form>
            </div> 
        </div> 
        <?= view('templates/footer') ?> 
        <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script> 
    </body> 
</html>


