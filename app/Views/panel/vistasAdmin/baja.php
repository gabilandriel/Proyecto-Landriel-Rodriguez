<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/miestilo.css') ?>" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

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
  <h3 class="mb-4 text-center"><i class="bi bi-person-x me-2"></i>Usuarios dados de baja</h3>

  <table class="table table-bordered table-hover align-middle">
    <thead class="table-dark">
      <tr>
        <th>Nombre</th>
        <th>Usuario</th>
        <th>DNI</th>
        <th class="text-center">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($clientesBaja as $cliente): ?>
        <tr>
          <td><?= esc($cliente['nombre']) . ' ' . esc($cliente['apellido']) ?></td>
          <td><?= esc($cliente['nombre_usuario']) ?></td>
          <td><?= esc($cliente['dni']) ?></td>
          <td class="text-center">
            <a href="<?= base_url('admin/usuarios/alta/' . $cliente['id_usuario']) ?>" class="btn btn-success btn-sm">
              <i class="bi bi-arrow-clockwise me-1"></i> Reactivar
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <div class="text-end mt-3">
    <a href="<?= base_url('admin/usuarios') ?>" class="btn btn-secondary">
      <i class="bi bi-arrow-left me-1"></i> Volver a gestión de usuarios
    </a>
  </div>
</div>

<?= view('templates/footer') ?>
</body>
</html>
