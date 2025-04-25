
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
    <body class= "bgbg-white text-dark">
    <?= view('templates/header') ?>

    <section class="py-5">
      <div class="container">
        <h1 class="mb-4">Quiénes Somos</h1>
        <p class="lead">
            Nuestro emprendimiento comenzó con la iniciativa de dos amigos apasionados por el deporte. Con esfuerzo, dedicación y compromiso, logramos evolucionar y consolidarnos en el mercado deportivo.
        </p>
        <p class="lead">
            Nuestro principal objetivo es que cada cliente tenga una excelente experiencia deportiva. Buscamos que la compra sea fácil, segura y eficiente, con envíos rápidos directamente a la puerta de sus hogares.
        </p>
        <p class="lead">
            Nos esforzamos por ofrecer atención personalizada, productos de calidad y un servicio postventa que acompañe al cliente en cada paso de su experiencia con nosotros.
        </p>
        <p>
            Atte.<br>
            Landriel, Gabriel <br>
            Rodriguez, Lucas.
        </p>
     </div>
    </section>

    <footer class="py-4 bg-white text-dark">
  <div class="container mt-5 text-center">
    <h5 class="mb-3">Staff de la página</h5>
    <p class="mb-1">
      <i class="bi bi-envelope-fill"></i> lucasjrodriguez02@gmail.com
    </p>
    <p class="mb-1">
      <i class="bi bi-envelope-fill"></i> gabilandriel07@gmail.com
    </p>
    <p class="mb-1">
      <i class="bi bi-instagram"></i> @lucasrodriguez02
    </p>
    <p>
      <i class="bi bi-instagram"></i> @gabilandriel07
    </p>
  </div>
</footer>

    <?= view('templates/footer.php') ?>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>