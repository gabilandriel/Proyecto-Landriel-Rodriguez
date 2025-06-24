<!DOCTYPE html>
<html lang="es">
<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/miestilo.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
<?= view('templates/header') ?>

<div class="container mt-5">
  <div class="row">
    <!-- Imagen -->
    <div class="col-md-6">
      <img src="<?= base_url('assets/img/' . $producto['url_imagen']) ?>" alt="<?= esc($producto['nombre']) ?>" class="img-fluid rounded shadow">
    </div>
    <!-- Info -->
    <div class="col-md-6">
      <h2 class="fw-bold"><?= esc($producto['nombre']) ?></h2>
      <p class="text-muted"><?= esc($producto['categoria']) ?></p>
      <p class="fs-5">$<?= number_format($producto['precio'], 2, ',', '.') ?></p>
      <p><strong>Descripción:</strong> <?= esc($producto['descripcion']) ?></p>
      <p><strong>Stock disponible:</strong> <?= esc($producto['cantidad']) ?></p>

      <!-- Formulario para agregar al carrito -->
      <form method="post" action="<?= base_url('carrito/agregar/' . $producto['id_producto']) ?>">
        <div class="mb-3">
          <label for="cantidad" class="form-label">Cantidad</label>
          <input type="number" name="cantidad" id="cantidad" class="form-control" min="1" max="<?= $producto['cantidad'] ?>" value="1" required>
        </div>
        <button type="submit" class="btn btn-dark w-100 mb-2">
          <i class="bi bi-cart-plus"></i> Añadir al carrito
        </button>
      </form>

      <!-- Botón para volver al catálogo -->
        <a href="<?= base_url('catalogo') ?>" class="btn btn-outline-secondary w-100">
            <i class="bi bi-arrow-left"></i> Volver al catálogo
        </a>
    </div>
  </div>
</div>

<?= view('templates/footer') ?>
</body>
</html>
