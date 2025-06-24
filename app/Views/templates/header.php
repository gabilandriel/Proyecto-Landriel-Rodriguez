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

          <!-- Navegación centrada -->
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item mx-3">
                <a class="nav-link text-white-50 fw-semibold text-uppercase" href="<?= base_url('informacion-de-contacto') ?>">Información de contacto</a>
              </li>
            </ul>
          </div>

          <!-- Botones a la derecha -->
          <div class="d-flex align-items-center gap-2">
          <!-- Carrito (siempre visible) -->
          <a href="<?= base_url('carrito') ?>" class="btn btn-outline-light" title="Carrito">
            <i class="bi bi-cart3"></i>
          </a>

          <?php if (!session()->get('logged_in')): ?>
            <!-- Solo si NO ha iniciado sesión -->
            <a href="<?= base_url('login') ?>" class="btn btn-outline-light" title="Iniciar sesión">
              <i class="bi bi-box-arrow-in-right me-1"></i> Iniciar sesión
            </a>

            <a href="<?= base_url('registro') ?>" class="btn btn-light text-dark" title="Registrarse">
              <i class="bi bi-person-plus-fill me-1"></i> Registrate
            </a>
          <?php else: ?>
            <!-- Si está logueado -->
            
            <!-- Botón perfil/dashboard -->
            <?php
              $id_rol = session()->get('id_rol');
              $link_panel = ($id_rol == 1) ? 'panel/admin' : 'panel/cliente';
            ?>
            <a href="<?= base_url($link_panel) ?>" class="btn btn-outline-info" title="Mi perfil">
              <i class="bi bi-person-circle me-1"></i> Mi perfil
            </a>

            <!-- Botón logout -->
            <a href="<?= base_url('logout') ?>" class="btn btn-danger" title="Cerrar sesión">
              <i class="bi bi-box-arrow-right me-1"></i> Cerrar sesión
            </a>
          <?php endif; ?>
        </div>
      </div>
    </nav>
</header>

