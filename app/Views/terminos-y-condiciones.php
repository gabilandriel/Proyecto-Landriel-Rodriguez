
<!DOCTYPE HTML>
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


        <div class="container my-5">
            <h1 class="text-center mb-4">Términos y Condiciones de Uso</h1>
        <section class="justificado">
            <p>Bienvenido/a a <strong>vibeSports</strong>. Antes de utilizar nuestro sitio web y realizar cualquier compra, te solicitamos que leas detenidamente los siguientes términos y condiciones. Al acceder y utilizar nuestro sitio web, aceptás expresamente los términos descritos a continuación. Si no estás de acuerdo con alguna parte de los mismos, te recomendamos no continuar con el uso de nuestro sitio.</p>

            <h3>1. Información General</h3>
            <p><strong>vibeSports</strong> es un sitio de comercio electrónico destinado a la venta de insumos y artículos deportivos. Nuestra tienda online se especializa en ofrecer productos de calidad para diversas disciplinas deportivas, con el objetivo de fomentar un estilo de vida saludable y activo.</p>

            <p>El acceso y uso de nuestro sitio web, así como la compra de productos, están sujetos a los términos detallados a continuación, los cuales pueden ser modificados sin previo aviso. Es responsabilidad del usuario revisar periódicamente esta sección para mantenerse informado sobre posibles cambios.</p>

            <h3>2. Uso del Sitio Web</h3>
            <p>Al utilizar este sitio, el usuario se compromete a:</p>
            <ul>
                <li>Utilizar el sitio únicamente con fines legales y conforme a estos términos y condiciones.</li>
                <li>No realizar actividades que puedan dañar, sobrecargar o perjudicar el funcionamiento del sitio web.</li>
                <li>No intentar acceder a información restringida, sistemas o redes del sitio sin autorización.</li>
                <li>Proporcionar información veraz y actualizada al momento de registrarse o realizar una compra.</li>
            </ul>

            <h3>3. Registro de Usuario</h3>
            <p>Para realizar compras a través de nuestro sitio web, el usuario puede optar por registrarse creando una cuenta personal. La información proporcionada debe ser completa, exacta y actual. El usuario es responsable de mantener la confidencialidad de sus datos de acceso y de todas las actividades que se realicen desde su cuenta.</p>

            <h3>4. Productos y Descripciones</h3>
            <p>En <strong>vibeSports</strong> nos esforzamos por presentar los productos con la mayor precisión posible. Sin embargo, las imágenes pueden variar ligeramente respecto al producto real. Las descripciones, precios y disponibilidad están sujetos a cambios sin previo aviso. Nos reservamos el derecho de corregir errores tipográficos o inexactitudes en cualquier momento sin previo aviso.</p>

            <h3>5. Precios y Formas de Pago</h3>
            <p>Todos los precios están expresados en la moneda local e incluyen los impuestos correspondientes, salvo que se indique lo contrario. Aceptamos diversos métodos de pago, incluyendo tarjetas de crédito, débito y transferencias bancarias. Al confirmar una compra, el usuario garantiza que está autorizado a utilizar el método de pago seleccionado.</p>

            <h3>6. Envíos y Plazos de Entrega</h3>
            <p>Los productos se despachan dentro de los plazos estipulados al momento de la compra. Los tiempos de entrega pueden variar dependiendo del destino y disponibilidad del producto. vibeSports no se responsabiliza por demoras atribuibles a empresas de mensajería o situaciones de fuerza mayor.</p>

            <p>Es responsabilidad del cliente asegurarse de proporcionar una dirección de entrega correcta y completa. En caso de devolución por error en los datos, los costos de reenvío correrán por cuenta del cliente.</p>

            <h3>7. Políticas de Cambios y Devoluciones</h3>
            <p>El cliente tiene derecho a solicitar el cambio o devolución de un producto dentro de los primeros 10 días hábiles a partir de la recepción del pedido, siempre que el artículo se encuentre sin uso, en perfectas condiciones y con su embalaje original.</p>

            <p>Para gestionar un cambio o devolución, es necesario comunicarse previamente con nuestro equipo de atención al cliente a través del correo electrónico o formulario de contacto. No se aceptarán devoluciones sin previa notificación. vibeSports se reserva el derecho de rechazar cambios o devoluciones que no cumplan con estas condiciones.</p>

            <h3>8. Propiedad Intelectual</h3>
            <p>Todos los contenidos presentes en el sitio web de vibeSports, incluyendo pero no limitándose a textos, imágenes, logotipos, gráficos y diseño, son propiedad de vibeSports o de sus proveedores, y están protegidos por las leyes de propiedad intelectual vigentes. Queda estrictamente prohibido reproducir, distribuir, modificar o utilizar cualquier contenido sin autorización previa por escrito.</p>

            <h3>9. Privacidad y Protección de Datos</h3>
            <p>La privacidad de nuestros usuarios es fundamental. Toda información personal que nos proporciones será tratada de acuerdo con nuestra Política de Privacidad, la cual podés consultar en una sección específica del sitio. No compartimos ni vendemos tus datos a terceros sin tu consentimiento.</p>

            <p>Al utilizar nuestro sitio y realizar una compra, estás aceptando que almacenemos y utilicemos tus datos personales para procesar tus pedidos y mejorar tu experiencia como cliente.</p>

            <h3>10. Responsabilidad</h3>
            <p>vibeSports no se hace responsable por daños directos o indirectos que puedan derivarse del uso o la imposibilidad de uso de los productos o servicios ofrecidos. El usuario asume toda la responsabilidad por el uso de los productos adquiridos a través del sitio.</p>

            <p>El sitio puede contener enlaces a páginas de terceros. vibeSports no controla ni se responsabiliza por el contenido o prácticas de estos sitios externos.</p>

            <h3>11. Suspensión o Cancelación de Cuentas</h3>
            <p>vibeSports se reserva el derecho de suspender o cancelar una cuenta de usuario en caso de incumplimiento de los presentes términos, uso indebido del sitio, actividades fraudulentas o cualquier conducta que consideremos inapropiada.</p>

            <h3>12. Modificaciones en los Términos y Condiciones</h3>
            <p>Nos reservamos el derecho de actualizar o modificar estos Términos y Condiciones en cualquier momento, sin necesidad de notificación previa. Las modificaciones entrarán en vigencia a partir de su publicación en el sitio web. El uso continuado del sitio después de la publicación de cambios implica la aceptación de los nuevos términos.</p>

            <h3>13. Legislación Aplicable y Jurisdicción</h3>
            <p>Estos términos se rigen por las leyes vigentes en la República Argentina. Cualquier conflicto relacionado con el uso del sitio web o los productos adquiridos será resuelto por los tribunales competentes del país.</p>

            <h3>14. Contacto</h3>
            <p>Si tenés alguna duda sobre estos Términos y Condiciones, podés comunicarte con nosotros a través de nuestro correo electrónico de atención al cliente o completando el formulario en la sección de Contacto.</p>
            </section>
        </div>

        <footer class="bg-dark text-white py-5">
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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>