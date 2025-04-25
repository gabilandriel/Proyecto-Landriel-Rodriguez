
<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/miestilo.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Quiénes Somos</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="" crossorigin="">
    <link href="assets/css/miestilo.css" rel="stylesheet">

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
  
  .contact-form {
            position: fixed;
            bottom: 210px;
            left: 20px;
            background-color: #f8f9fa;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            z-index: 9999;
}
  </style>


</head>
    <style>
    .justificado {
      text-align: justify;
    }
  </style>
    <body class= "bgbg-white text-dark">
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
                <h6>Futbol</h6>
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
                <h6>Futbol</h6>
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
                <h6>Futbol</h6>
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

</style>
</head>
<body>
    <div style="display: flex; align-items: stretch; gap: 40px; padding: 20px;">
  <div style="flex: 1;">
        <h2>INFORMACION DE CONTACTO</h2>
        <p>¡Te podés comunicar con nosotros de Lunes a Domingo de 9 a 21 hrs!</p>
        <p><strong>Titular de la empresa:</strong> Landriel Gabriel, Rodriguez Lucas<br>
        </p>
        <strong>Razón social:</strong> Comercio Web S.A.<br>
        <p>
        <strong>Domicilio legal:</strong> Paraguay 1054, Corrientes, Argentina
        </p>
        Escribinos por Whatsapp al <a href="https://wa.me/543731620377">+54 3731620377</a> <br>
        También podés llamarnos al +54 3731443472.<br>
        Si querés mandar un mail hacé <a href="mailto:vS.contacto@gmail.com">click acá</a>.<br>
     </div>

     <div class="contact-form">
        <h4>COMUNICATE CON NOSOTROS DIRECTAMENTE</h4>
        <form action="#" method="post">
            <input type="text" placeholder="Tu nombre" required><br>
            <input type="email" placeholder="Tu email" required><br>
            <textarea placeholder="Tu mensaje" rows="4" required></textarea><br>
            <button type="submit">Enviar</button>
        </form>
    </div>
  </body>

    <div style="flex: 1; display: flex; flex-direction: column; justify-content: flex-start;">
  <h3>¡Pasá por nuestro local!</h3>
  <p>¡Te esperamos en nuestro local físico!</p>
  
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3537.5288027406196!2d-58.84051862368882!3d-27.467734115672807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94450ce6fa3a3c7f%3A0x4099dd7797a99713!2sParaguay%201054%2C%20W3400%20Corrientes!5e0!3m2!1ses!2sar!4v1714059098451!5m2!1ses!2sar" 
        width="600" 
        height="400" 
        style="border:0; border-radius: 10px;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
   </div>
</html>