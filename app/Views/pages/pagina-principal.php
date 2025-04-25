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
  <?= view('templates/header.php') ?>
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/fondoRunning1.jpg" class="d-block w-100" alt="Slide 1">
      </div>
      <div class="carousel-item">
        <img src="assets/img/fondoBasquet2.jpg" class="d-block w-100" alt="Slide 2">
      </div>
      <div class="carousel-item">
        <img src="assets/img/fondoFutbol3.jpg" class="d-block w-100" alt="Slide 3">
      </div>
      <div class="carousel-item">
        <img src="assets/img/fondoPadel2.jpg" class="d-block w-100" alt="Slide 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
  </div>

  <div class="container mt-5 mb-7">
  <div class="row g-4">
  <div class="col-12 col-md-6 border-0 position-relative">
      <div class="card bg-dark text-white border-0">
        <img src="assets/img/tarjetaBasquet.jpg" class="card-img" alt="Basquét">
        <div class="card-img-overlay d-flex flex-column justify-content-end">
          <h5 class="card-title">Basquét</h5>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6">
    <div class="card bg-dark text-white border-0 position-relative">
        <img src="assets/img/tarjetaFutbol.jpg" class="card-img" alt="Zapatilla 2">
        <div class="card-img-overlay d-flex flex-column justify-content-end">
          <h5 class="card-title">Fútbol</h5>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6">
    <div class="card bg-dark text-white border-0 position-relative">
        <img src="assets/img/tarjetaPadel.jpg" class="card-img" alt="Zapatilla 3">
        <div class="card-img-overlay d-flex flex-column justify-content-end">
          <h5 class="card-title">Padel</h5>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6">
    <div class="card bg-dark text-white border-0 position-relative">
        <img src="assets/img/tarjetaRunning.jpg" class="card-img" alt="Zapatilla 4">
        <div class="card-img-overlay d-flex flex-column justify-content-end">
          <h5 class="card-title">Running</h5>
        </div>
      </div>
    </div>
  </div>
</div>

<?= view('templates/footer.php') ?>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

