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

    <!-- Carousel Section -->
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/fondoRunning1.jpg?v=2" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="carousel-item">
          <img src="assets/img/fondoBasquet2.jpg?v=3" class="d-block w-100" alt="Slide 2">
        </div>
        <div class="carousel-item">
          <img src="assets/img/fondoFutbol3.jpg?v=4" class="d-block w-100" alt="Slide 3">
        </div>
        <div class="carousel-item">
          <img src="assets/img/fondoPadel2.jpg?v=5" class="d-block w-100" alt="Slide 4">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
    </div>

    <div class="container mt-5 mb-7 tarjetas">
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
     
<!-- Sección Productos Destacados -->
<div class="container mt-5">
  <h2 class="text-center mb-4">Productos Destacados</h2>

  <!-- Carrusel para móviles (1 producto por slide) -->
  <div class="d-md-none">
    <div id="carouselMobile" class="carousel slide" data-bs-ride="false">
      <div class="carousel-inner">
        <!-- Producto 1 -->
        <div class="carousel-item active">
          <div class="d-flex justify-content-center">
            <div class="col-10">
              <div class="card h-100 shadow-sm">
                <img src="assets/img/camisetaBasquet.jpg" class="card-img-top" alt="Producto 1">
                <div class="card-body text-center">
                  <h5 class="card-title">Camiseta <strong>Hornets</strong> 24/25 - Lamelo Ball</h5>
                  <p class="text-muted text-decoration-line-through mb-1">$***</p>
                  <p class="fst-italic fw-bold text-danger">Próximamente</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Producto 2 -->
        <div class="carousel-item">
          <div class="d-flex justify-content-center">
            <div class="col-10">
              <div class="card h-100 shadow-sm">
                <img src="assets/img/botinesFutbol2.png" class="card-img-top" alt="Producto 2">
                <div class="card-body text-center">
                  <h5 class="card-title">Botines <strong>Adidas F50 Messi "Leyenda"</strong> 24 - Lionel Messi</h5>
                  <p class="text-muted text-decoration-line-through mb-1">$***</p>
                  <p class="fst-italic fw-bold text-danger">Próximamente</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Producto 3 -->
        <div class="carousel-item">
          <div class="d-flex justify-content-center">
            <div class="col-10">
              <div class="card h-100 shadow-sm">
                <img src="assets/img/paletaPadel.jpg" class="card-img-top" alt="Producto 3">
                <div class="card-body text-center">
                  <h5 class="card-title">Paleta <strong>Adidas Metalbone HDR</strong> 23 - Alejandro Galán</h5>
                  <p class="text-muted text-decoration-line-through mb-1">$***</p>
                  <p class="fst-italic fw-bold text-danger">Próximamente</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Producto 4 -->
        <div class="carousel-item">
          <div class="d-flex justify-content-center">
            <div class="col-10">
              <div class="card h-100 shadow-sm">
                <img src="assets/img/camisetaBarcelona2.jpg" class="card-img-top" alt="Producto 4">
                <div class="card-body text-center">
                  <h5 class="card-title">Camiseta <strong>FC Barcelona Local</strong> 24/25 - Lamine Yamal</h5>
                  <p class="text-muted text-decoration-line-through mb-1">$***</p>
                  <p class="fst-italic fw-bold text-danger">Próximamente</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Producto 5 -->
        <div class="carousel-item">
          <div class="d-flex justify-content-center">
            <div class="col-10">
              <div class="card h-100 shadow-sm">
                <img src="assets/img/zapasBasquet2.png" class="card-img-top" alt="Producto 5">
                <div class="card-body text-center">
                  <h5 class="card-title">Zapatillas <strong>Nike Kyrie 3</strong> 16 - Kyrie Irving</h5>
                  <p class="text-muted text-decoration-line-through mb-1">$***</p>
                  <p class="fst-italic fw-bold text-danger">Próximamente</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Producto 6 -->
        <div class="carousel-item">
          <div class="d-flex justify-content-center">
            <div class="col-10">
              <div class="card h-100 shadow-sm">
                <img src="assets/img/zapasRunning2.jpg" class="card-img-top" alt="Producto 6">
                <div class="card-body text-center">
                  <h5 class="card-title">Zapatillas <strong>Nike Herren Vaporfly 4</strong> 17 - Eliud Kipchoge</h5>
                  <p class="text-muted text-decoration-line-through mb-1">$***</p>
                  <p class="fst-italic fw-bold text-danger">Próximamente</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Controles -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselMobile" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselMobile" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>

  <!-- Carrusel para desktop (3 productos por slide) -->
  <div class="d-none d-md-block">
    <div id="carouselDesktop" class="carousel slide" data-bs-ride="false">
      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
              <!-- Producto 1 -->
              <div class="card h-100 shadow-sm">
                <img src="assets/img/camisetaBasquet.jpg" class="card-img-top" alt="Producto 1">
                <div class="card-body text-center">
                  <h5 class="card-title">Camiseta <strong>Hornets</strong> 24/25 - Lamelo Ball</h5>
                  <p class="text-muted text-decoration-line-through mb-1">$***</p>
                  <p class="fst-italic fw-bold text-danger">Próximamente</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <!-- Producto 2 -->
              <div class="card h-100 shadow-sm">
                <img src="assets/img/botinesFutbol2.png" class="card-img-top" alt="Producto 2">
                <div class="card-body text-center">
                  <h5 class="card-title">Botines <strong>Adidas F50 Messi "Leyenda"</strong> 24 - Lionel Messi</h5>
                  <p class="text-muted text-decoration-line-through mb-1">$***</p>
                  <p class="fst-italic fw-bold text-danger">Próximamente</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <!-- Producto 3 -->
              <div class="card h-100 shadow-sm">
                <img src="assets/img/paletaPadel.jpg" class="card-img-top" alt="Producto 3">
                <div class="card-body text-center">
                  <h5 class="card-title">Paleta <strong>Adidas Metalbone HDR</strong> 23 - Alejandro Galán</h5>
                  <p class="text-muted text-decoration-line-through mb-1">$***</p>
                  <p class="fst-italic fw-bold text-danger">Próximamente</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
              <!-- Producto 4 -->
              <div class="card h-100 shadow-sm">
                <img src="assets/img/camisetaBarcelona2.jpg" class="card-img-top" alt="Producto 4">
                <div class="card-body text-center">
                  <h5 class="card-title">Camiseta <strong>FC Barcelona Local</strong> 24/25 - Lamine Yamal</h5>
                  <p class="text-muted text-decoration-line-through mb-1">$***</p>
                  <p class="fst-italic fw-bold text-danger">Próximamente</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <!-- Producto 5 -->
              <div class="card h-100 shadow-sm">
                <img src="assets/img/zapasBasquet2.png" class="card-img-top" alt="Producto 5">
                <div class="card-body text-center">
                  <h5 class="card-title">Zapatillas <strong>Nike Kyrie 3</strong> 16 - Kyrie Irving</h5>
                  <p class="text-muted text-decoration-line-through mb-1">$***</p>
                  <p class="fst-italic fw-bold text-danger">Próximamente</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <!-- Producto 6 -->
              <div class="card h-100 shadow-sm">
                <img src="assets/img/zapasRunning2.jpg" class="card-img-top" alt="Producto 6">
                <div class="card-body text-center">
                  <h5 class="card-title">Zapatillas <strong>Nike Herren Vaporfly 4</strong> 17 - Eliud Kipchoge</h5>
                  <p class="text-muted text-decoration-line-through mb-1">$***</p>
                  <p class="fst-italic fw-bold text-danger">Próximamente</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Controles -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselDesktop" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselDesktop" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
</div>
  



    <?= view('templates/footer.php') ?>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

