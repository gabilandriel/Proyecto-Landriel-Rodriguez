<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
    <div class="container">

      <!-- Logo -->
      <a class="navbar-brand d-flex align-items-center" href="<?= base_url('/') ?>">
        <img src="<?= base_url('assets/img/logo.png') ?>" alt="vibeSports" width="60" height="60" class="me-2">
      </a>

      <!-- Botón hamburguesa -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Contenido del navbar -->
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item mx-2">
            <a class="nav-link text-white-50" href="<?= base_url('comercializacion') ?>">Comercialización</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link text-white-50" href="<?= base_url('informacion-de-contacto') ?>">Información de contacto</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link text-white-50" href="<?= base_url('quienes-somos') ?>">Quiénes somos</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link text-white-50" href="<?= base_url('terminos-y-usos') ?>">Términos y usos</a>
          </li>
        </ul>
      </div>

      <!-- Botón Carrito (desktop y móvil) -->
      <a href="#carrito" class="btn btn-outline-light ms-3">
        <i class="bi bi-cart3"></i>
      </a>

    </div>
  </nav>
</header>
