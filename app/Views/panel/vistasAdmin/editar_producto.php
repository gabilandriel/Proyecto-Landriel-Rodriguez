<!DOCTYPE html> 
<html lang="es"> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet"> 
        <link href="<?= base_url('assets/css/miestilo.css') ?>" rel="stylesheet"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"> 
        <title>Editar producto</title> 
    </head> 
    <body> 
        <?= view('templates/header') ?> 
        <div class="container mt-5"> 
            <div class="card shadow-sm"> 
                <div class="card-body">
                     <h3 class="mb-4">Editar producto</h3> 
                     <form action="<?= base_url('admin/productos/actualizar/' . $producto['id_producto']) ?>" method="post" enctype="multipart/form-data"> 
                        <div class="mb-3"> 
                            <label for="nombre">Nombre</label> 
                            <input type="text" name="nombre" class="form-control" value="<?= esc($producto['nombre']) ?>" required> 
                        </div> 
                        <div class="mb-3"> 
                            <label for="descripcion">Descripción</label> 
                            <textarea name="descripcion" class="form-control" required><?= esc($producto['descripcion']) ?></textarea> 
                        </div> 
                        <div class="mb-3"> 
                            <label for="precio">Precio</label> 
                            <input type="number" name="precio" class="form-control" value="<?= esc($producto['precio']) ?>" required> 
                        </div> 
                        <div class="mb-3"> 
                            <label for="cantidad">Stock</label> 
                            <input type="number" name="cantidad" class="form-control" value="<?= esc($producto['cantidad']) ?>" required> 
                        </div> 
                        <div class="mb-3"> 
                            <label for="id_categoria">Categoría</label> 
                            <select name="id_categoria" class="form-select" required> 
                                <?php foreach ($categorias as $cat): ?> 
                                    <option value="<?= $cat['id_categoria'] ?>" <?= $cat['id_categoria'] == $producto['id_categoria'] ? 'selected' : '' ?>> <?= esc($cat['nombre']) ?> </option> 
                                <?php endforeach; ?> 
                            </select> 
                        </div> <div class="mb-3"> 
                            <label for="url_imagen">Imagen (opcional)</label> 
                            <input type="file" name="url_imagen" class="form-control"> 
                        </div> 
                        <button type="submit" class="btn btn-success">Guardar cambios</button> 
                        <a href="<?= base_url('admin/productos') ?>" class="btn btn-secondary">
                            Cancelar
                        </a> 
                    </form> 
                </div> 
            </div> 
        </div> 
        <?= view('templates/footer') ?> 
    </body> 
</html>