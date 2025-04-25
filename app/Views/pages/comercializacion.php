<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/miestilo.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
    <body>

        <?= view('templates/header') ?>
    
        <section class="container my-5">
            <h1 class="text-center mb-4">Comercialización</h1>
            <div class="row mb-4">
                <div class="col-md-12">
                <div class="card p-4 shadow-sm">
                    <p>
                    En <strong>vibeSports</strong> tenemos como objetivo brindar al usuario toda la información necesaria para concretar su compra de manera segura, rápida y eficiente.
                    </p>
                </div>
                </div>
            </div>
            <!-- Tipos de Entrega -->
            <div class="row mb-4">
                <div class="col-md-6 mb-3">
                <div class="card h-100 p-3 text-center shadow-sm">
                    <img src="assets/img/icono-tienda.jpg" class="img-fluid rounded mb-2" style="max-width: 80px; height: auto;" alt="">
                    <h5 class="fw-bold">Retiro en Tienda</h5>
                    <p class="text-muted">Podés retirar sin costo en nuestras sucursales oficiales.</p>
                </div>
                </div>
                <div class="col-md-6 mb-3">
                <div class="card h-100 p-3 text-center shadow-sm">
                    <img src="assets/img/icono-casa.jpg" class="img-fluid rounded mb-2" style="max-width: 80px; height: auto;" alt="">
                    <h5 class="fw-bold">Envío a Domicilio</h5>
                    <p class="text-muted">Recibí tus productos en casa con logística segura.</p>
                </div>
                </div>
            </div>

            <!-- Formas de Envíos -->
            <div class="card p-4 shadow-sm mb-4">
                <h4 class="mb-3">Formas de Envío</h4>
                <ul>
                <li><strong>Envío estándar:</strong> 3 a 7 días hábiles (dependiendo de la zona geográfica.).</li>
                <li><strong>Envío express:</strong> Hasta 48hs hábiles (ideal para compras urgentes o regalos de último momento.).</li>
                </ul>
            </div>

            <!-- Métodos de Pago -->
            <div class="card p-4 shadow-sm mb-4">
                <h4 class="mb-3">Métodos de Pago</h4>
                <div class="row text-center">
                <div class="col-6 col-md-3 mb-3">
                    <img src="assets/img/logo-visa.jpg" class="img-fluid" style="max-width: 60px; height: auto;">
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <img src="assets/img/logo-mercado pago.jpg" class="img-fluid" style="max-width: 60px; height: auto;">
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <img src="assets\img\logo-uala.jpg" class="img-fluid" style="max-width: 60px; height: auto;">
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <img src="assets/img/logo-pago facil.jpg" class="img-fluid" style="max-width: 60px; height: auto;">
                </div>
                </div>
            </div>

            <!-- Información Complementaria -->
            <div class="card p-4 shadow-sm">
                <h4>Información Complementaria</h4>
                <p>
                Políticas de cambios y devoluciones, atención al cliente, garantías y seguimiento de pedidos.
                </p>
            </div>
</section>

    <?= view('templates/footer.php') ?>
</body>