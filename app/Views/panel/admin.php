<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/miestilo.css') ?>" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <title>Panel Admin</title>
</head>
<body>
<?= view('templates/header') ?>

<div class="container mt-5">
  <div class="row">
    <!-- Lateral izquierdo -->
    <div class="col-md-3">
      <div class="list-group shadow-sm">
        <a href="#" class="list-group-item list-group-item-action active">
          Panel de administrador
        </a>
        <a href="<?= base_url('admin/usuarios') ?>" class="list-group-item list-group-item-action">Gestionar Usuarios</a>
        <a href="<?= base_url('admin/consultas') ?>" class="list-group-item list-group-item-action">Gestionar Consultas</a>
        <a href="#" class="list-group-item list-group-item-action">Gestionar Productos</a>
        <a href="<?= base_url('admin/historial-compras') ?>" class="list-group-item list-group-item-action"> Historial de compras </a>
      </div>
    </div>

    <!-- Contenido principal -->
    <div class="col-md-9">
      <div class="card shadow-sm">
        <div class="card-body">
          <h3 class="mb-4">Bienvenido, <?= esc($admin['nombre_usuario']) ?></h3>
          <h5>Información personal</h5>
          <ul class="list-group">
            <li class="list-group-item"><strong>Nombre:</strong> <?= esc($admin['nombre']) ?> <?= esc($admin['apellido']) ?></li>
            <li class="list-group-item"><strong>Usuario:</strong> <?= esc($admin['nombre_usuario']) ?></li>
            <li class="list-group-item"><strong>DNI:</strong> <?= esc($admin['dni']) ?></li>
            <li class="list-group-item"><strong>Dirección:</strong> <?= esc($admin['direccion']) ?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<?= view('templates/footer') ?>
</body>
</html>
