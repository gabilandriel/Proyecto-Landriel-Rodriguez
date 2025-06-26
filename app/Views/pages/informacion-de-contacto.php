<!DOCTYPE html>
<html lang="es">
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

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <h2>INFORMACION DE CONTACTO</h2>
                <p>¡Te podés comunicar con nosotros de Lunes a Domingo de 9 a 21 hrs!</p>
                <p><strong>Titulares de la empresa:</strong> Landriel Gabriel, Rodriguez Lucas<br></p>
                <strong>Razón social:</strong> Comercio Web S.A.<br>
                <p><strong>Domicilio legal:</strong> Paraguay 1054, Corrientes, Argentina</p>
                Escribinos por Whatsapp al <a href="https://wa.me/543731620377">+54 3731620377</a> <br>
                También podés llamarnos al +54 3731443472.<br>
                Si querés mandar un mail hacé <a href="mailto:vS.contacto@gmail.com">click acá</a>.<br>
            </div>

            <div class="col-md-4 mt-4 mt-md-0">
                <div class="contact-form">
                    <h4>CONSULTAS DIRECTAS CON VIBESPORTS</h4>
                    <?php if (session()->getFlashdata('mensaje')): ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('mensaje') ?>
                        </div>
                    <?php endif; ?>
                    <form method="post" action="<?= base_url('consultas/guardar') ?>">
                        <input type="text" name="nombre" class="form-control mb-3" placeholder="Tu nombre" required> 
                        <input type="email" name="correo" class="form-control mb-3" placeholder="Tu email" required> 
                        <textarea name="descripcion" class="form-control mb-3" placeholder="Tu mensaje" rows="4" required></textarea> 
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>


            <div class="col-md-4 mt-4 mt-md-0">
                <h3>¡Pasá por nuestro local!</h3>
                <p>¡Te esperamos en nuestro local físico!</p>
                <div class="map-responsive">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3537.5288027406196!2d-58.84051862368882!3d-27.467734115672807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94450ce6fa3a3c7f%3A0x4099dd7797a99713!2sParaguay%201054%2C%20W3400%20Corrientes!5e0!3m2!1ses!2sar!4v1714059098451!5m2!1ses!2sar"
                        width="600"
                        height="450" style="border:0; border-radius: 10px;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <?= view('templates/footer.php') ?>
    <script src="assets/js/contacto.js"></script>
</body>
</html>