<!DOCTYPE html>
<html lang="es">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/miestilo.css') ?>" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
      <style>
        body {
          font-family: 'Helvetica Neue', sans-serif;
          background-color: #f8f9fa;
        }
        .filters {
          background-color: #fdfdfd;
          border-right: 1px solid #ddd;
          padding: 20px;
          height: 100vh;
        }
        .filters .form-check {
          margin-bottom: 10px;
        }
        .filters button, .filters a {
          width: 100%;
        }
        .product-card {
        height: 100%;
        border: none;
        transition: transform 0.2s ease;
        }
        .product-card:hover {
          transform: translateY(-5px);
        }

        .product-img-wrapper {
          width: 100%;
          aspect-ratio: 1 / 1;
          display: flex;
          align-items: center;
          justify-content: center;
          overflow: hidden;
          border-radius: 8px 8px 0 0;
        }
        .product-img {
          max-width: 100%;
          max-height: 100%;
          width: auto;
          height: auto;
          object-fit: contain;
        }

        .category-title {
          font-size: 14px;
          text-transform: uppercase;
          color: #6c757d;
          font-weight: 600;
        }
        .product-name {
          font-weight: 600;
        }
      </style>
  </head>
  <body>
    <?= view('templates/header.php') ?>
    <div class="container-fluid">
      <div class="row">
        <!-- Filtros a la izquierda -->
        <aside class="col-md-2 filters">
          <form action="<?= base_url('catalogo') ?>" method="get">
            <h6 class="fw-bold mb-3">Categorías</h6>
            <?php foreach ($categorias as $categoria): ?>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="categorias[]" value="<?= $categoria['id_categoria'] ?>"
                  <?= is_array($categoriaSeleccionada) && in_array($categoria['id_categoria'], $categoriaSeleccionada) ? 'checked' : '' ?>>
                <label class="form-check-label">
                  <?= esc($categoria['nombre']) ?>
                </label>
              </div>
            <?php endforeach; ?>
            <button type="submit" class="btn btn-dark btn-sm mt-2">Aplicar filtros</button>
            <a href="<?= base_url('catalogo') ?>" class="btn btn-secondary btn-sm mt-2">Eliminar filtros</a>
          </form>
        </aside>

        <!-- Productos -->
        <main class="col-md-10 py-4 px-5">
          <div class="row g-4">
          <?php if (!empty($productos)): ?> 
            <?php foreach ($productos as $producto): ?>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card product-card">
                  <a href="<?= base_url('producto/' . $producto['id_producto']) ?>">
                    <div class="product-img-wrapper">
                      <img src="<?= base_url('assets/img/' . $producto['url_imagen']) ?>" class="product-img" alt="<?= esc($producto['nombre']) ?>">
                    </div>
                  </a>
                  <div class="card-body">
                    <div class="category-title"><?= esc($producto['categoria']) ?></div>
                    <h6 class="product-name">
                      <a href="<?= base_url('producto/' . $producto['id_producto']) ?>" class="text-dark text-decoration-none">
                        <?= esc($producto['nombre']) ?>
                      </a>
                    </h6>
                    <p class="text-muted">$<?= number_format($producto['precio'], 2, ',', '.') ?></p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <?php else: ?>
            <div class="alert alert-info" role="alert">
              No hay productos disponibles.
            </div>
          <?php endif; ?>
        </main>
      </div>
    </div>
  <?= view('templates/footer.php') ?>
  </body>
</html>
