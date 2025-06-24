<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/miestilo.css') ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Poppins', sans-serif;
    }
    .form-container {
      max-width: 600px;
      margin: 3rem auto;
      background-color: #fff;
      padding: 2rem;
      border-radius: 0.75rem;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
    }
    .form-title {
      font-weight: 600;
      margin-bottom: 1.5rem;
      color: #343a40;
      text-align: center;
    }
    label {
      font-weight: 500;
    }
    .btn-dark {
      width: 100%;
      border-radius: 0.5rem;
      padding: 10px;
    }
  </style>
</head>
<body>

<?= view('templates/header.php') ?>

<div class="container">
  <div class="form-container">
    <h3 class="form-title"><i class="bi bi-pencil-square me-2"></i>Editar Usuario Cliente</h3>

    <form method="post" action="<?= base_url('admin/usuarios/actualizar/'.$cliente['id_usuario']) ?>">
      <div class="mb-3">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="<?= esc($cliente['nombre']) ?>" required>
      </div>

      <div class="mb-3">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" class="form-control" value="<?= esc($cliente['apellido']) ?>" required>
      </div>

      <div class="mb-3">
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" id="direccion" class="form-control" value="<?= esc($cliente['direccion']) ?>" required>
      </div>

      <div class="mb-3">
        <label for="nombre_usuario">Nombre de Usuario</label>
        <input type="text" name="nombre_usuario" id="nombre_usuario" class="form-control" value="<?= esc($cliente['nombre_usuario']) ?>" required>
      </div>

      <div class="mb-3">
        <label for="dni">DNI</label>
        <input type="text" name="dni" id="dni" class="form-control" value="<?= esc($cliente['dni']) ?>" required>
      </div>

      <button type="submit" class="btn btn-dark">
        <i class="bi bi-save me-1"></i> Guardar cambios
      </button>
    </form>
  </div>
</div>

<?= view('templates/footer.php') ?>

</body>
</html>

