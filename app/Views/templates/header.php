<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- Logo -->
      <a class="navbar-brand d-flex align-items-center" href="<?= base_url('/') ?>">
        <img src="assets/img/logo.png" alt="vibeSports" width="60" height="60" class="me-2 logo-vs">
      </a>

      <!-- Botón hamburguesa -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon "></span>
        </button>

      <!-- Botón Carrito (móvil) -->
        <a href="#carrito" class="btn btn-outline-light d-lg-none ms-5">
          <i class="bi bi-cart3"></i>
        </a>

      <!-- Menú -->
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav align-items-center">

          <!-- Hombres (desktop dropdown) -->
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
                <h6>Basquet</h6>
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

          <!-- Mujeres (desktop dropdown) -->
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
                <h6>Basquet</h6>
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

          <!-- Infantiles (desktop dropdown) -->
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
                <h6>Basquet</h6>
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

          <!-- Opciones simples en móvil -->
          <li class="nav-item d-lg-none"><a class="nav-link" href="#">Hombres</a></li>
          <li class="nav-item d-lg-none"><a class="nav-link" href="#">Mujeres</a></li>
          <li class="nav-item d-lg-none"><a class="nav-link" href="#">Infantiles</a></li>

        </ul>
      </div>

      <!-- Botón Carrito (desktop) -->
      <a href="#carrito" class="btn btn-outline-light d-none d-lg-block ms-3">
        <i class="bi bi-cart3"></i>
      </a>
  
    </div>
  </nav>
</header>
