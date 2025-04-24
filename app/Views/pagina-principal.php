<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/miestilo.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <style>
  * {
    font-family: 'Poppins', sans-serif;
  }

  .navbar-nav .nav-link {
    color: white;
    padding: 10px 15px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }

  .logo-vs {
    filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.4));
  }

  /* Dropdown personalizado de ancho completo */
  .custom-dropdown {
    position: static;
  }

  .custom-dropdown .custom-menu {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    width: 100vw;
    background-color: white;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    padding: 30px 60px;
    display: flex;
    justify-content: center;
    gap: 60px;
    opacity: 0;
    visibility: hidden;
    transform: translateY(20px);
    transition: all 0.4s ease;
    z-index: 1000;
  }

  .custom-dropdown:hover .custom-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }

  .dropdown-column {
    display: flex;
    flex-direction: column;
    gap: 12px;
    min-width: 150px;
  }

  .dropdown-column h6 {
    font-weight: 700;
    margin-bottom: 10px;
    color: #000;
    font-size: 14px;
  }

  .dropdown-column a {
    text-decoration: none;
    color: #444;
    font-size: 14px;
    transition: 0.2s ease;
  }

  .dropdown-column a:hover {
    color: #000;
    font-weight: 500;
  }
  </style>
</head>
<body>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
    <div class="container">

      <!-- LOGO -->
      <a class="navbar-brand d-flex align-items-center" href="#inicio">
        <img src="assets/img/logo.png" alt="vibeSports" width="60" height="60" class="me-2 logo-vs">
      </a>

      <!-- BOTÓN RESPONSIVE -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <!-- MENÚ -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <!-- HOMBRES -->
          <li class="nav-item custom-dropdown d-none d-lg-block">
          <a class="nav-link dropdown-toggle" href="#">Hombres</a>
            <div class="custom-menu">
              <div class="dropdown-column">
                <h6>Fútbol</h6>
                <a href="#">Vestimentas</a>
                <a href="#">Calzado</a>
                <a href="#">Accesorios</a>
              </div>
              <div class="dropdown-column">
                <h6>Basquét</h6>
                <a href="#">Vestimentas</a>
                <a href="#">Calzado</a>
                <a href="#">Accesorios</a>
              </div>
              <div class="dropdown-column">
              <h6>Padel</h6>
                <a href="#">Vestimentas</a>
                <a href="#">Calzado</a>
                <a href="#">Accesorios</a>
              </div>
              <div class="dropdown-column">
              <h6>Running</h6>
                <a href="#">Vestimentas</a>
                <a href="#">Calzado</a>
                <a href="#">Accesorios</a>
              </div>
            </div>
          </li>

          <!-- MUJERES -->
          <li class="nav-item custom-dropdown d-none d-lg-block">
          <a class="nav-link dropdown-toggle" href="#">Mujeres</a>
            <div class="custom-menu">
              <div class="dropdown-column">
                <h6>Fútbol</h6>
                <a href="#">Vestimentas</a>
                <a href="#">Calzado</a>
                <a href="#">Accesorios</a>
              </div>
              <div class="dropdown-column">
                <h6>Basquét</h6>
                <a href="#">Vestimentas</a>
                <a href="#">Calzado</a>
                <a href="#">Accesorios</a>
              </div>
              <div class="dropdown-column">
              <h6>Padel</h6>
                <a href="#">Vestimentas</a>
                <a href="#">Calzado</a>
                <a href="#">Accesorios</a>
              </div>
              <div class="dropdown-column">
              <h6>Running</h6>
                <a href="#">Vestimentas</a>
                <a href="#">Calzado</a>
                <a href="#">Accesorios</a>
              </div>
            </div>
          </li>

          <!-- INFANTILES -->
          <li class="nav-item custom-dropdown d-none d-lg-block">
          <a class="nav-link dropdown-toggle" href="#">Infantiles</a>
            <div class="custom-menu">
              <div class="dropdown-column">
                <h6>Fútbol</h6>
                <a href="#">Vestimentas</a>
                <a href="#">Calzado</a>
                <a href="#">Accesorios</a>
              </div>
              <div class="dropdown-column">
                <h6>Basquét</h6>
                <a href="#">Vestimentas</a>
                <a href="#">Calzado</a>
                <a href="#">Accesorios</a>
              </div>
              <div class="dropdown-column">
              <h6>Padel</h6>
                <a href="#">Vestimentas</a>
                <a href="#">Calzado</a>
                <a href="#">Accesorios</a>
              </div>
              <div class="dropdown-column">
              <h6>Running</h6>
                <a href="#">Vestimentas</a>
                <a href="#">Calzado</a>
                <a href="#">Accesorios</a>
              </div>
            </div>
          </li>

            <li class="nav-item d-lg-none">
              <a class="nav-link" href="#">Hombres</a>
            </li>
            <li class="nav-item d-lg-none">
              <a class="nav-link" href="#">Mujeres</a>
            </li>
            <li class="nav-item d-lg-none">
              <a class="nav-link" href="#">Infantiles</a>
            </li>
        </ul>

        <!-- BOTÓN CARRITO -->
        <a href="#carrito" class="btn btn-outline-light ms-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1h1a.5.5 0 0 1 .485.379L2.89 5H14.5a.5.5 0 0 1 .49.598l-1.5 7A.5.5 0 0 1 13 13H4a.5.5 0 0 1-.49-.402L1.01 2H.5a.5.5 0 0 1-.5-.5zM3.14 6l1.25 5.5h8.22l1.25-5.5H3.14zM5 14a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
          </svg>
        </a>
      </div>
    </div>
  </nav>
</header>
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets\img\fondoRunning1.jpg" class="d-block w-100" alt="Slide 1">
      </div>
      <div class="carousel-item">
        <img src="assets/img/fondoBasquet2.jpg" class="d-block w-100" alt="Slide 2">
      </div>
      <div class="carousel-item">
        <img src="assets\img\fondoFutbol3.jpg" class="d-block w-100" alt="Slide 3">
      </div>
      <div class="carousel-item">
        <img src="assets\img\fondoPadel2.jpg" class="d-block w-100" alt="Slide 3">
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

<footer class="bg-dark text-white py-5 mt-5">
  <div class="container">
    <div class="row gy-4">
      <div class="col-12 col-md-3">
        <h6 class="fw-bold">BUSCA LOCALES CERCA</h6>
        <p><a href="#" class="text-white text-decoration-none">REGISTRATE</a></p>
      </div>
      <div class="col-12 col-md-2">
        <h6 class="fw-bold">AYUDA</h6>
        <ul class="list-unstyled small">
          <li><a href="#" class="text-white-50 text-decoration-none">Comercialización</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Información de contacto</a></li>
        </ul>
      </div>
      <div class="col-12 col-md-2">
        <h6 class="fw-bold">SOBRE NOSOTROS</h6>
        <ul class="list-unstyled small">
          <li><a href="#" class="text-white-50 text-decoration-none">Quienes somos</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Términos y usos</a></li>
        </ul>
      </div>
      <div class="col-12 col-md-3 text-md-end">
        <a href="#"><i class="bi bi-twitter text-white fs-5 me-3"></i></a>
        <a href="#"><i class="bi bi-facebook text-white fs-5 me-3"></i></a>
        <a href="#"><i class="bi bi-youtube text-white fs-5 me-3"></i></a>
        <a href="#"><i class="bi bi-instagram text-white fs-5"></i></a>
      </div>
    </div>
  </div>
</footer>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>

