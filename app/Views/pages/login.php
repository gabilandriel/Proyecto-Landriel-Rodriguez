<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Iniciar sesión</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            body {
                background-color: #fff;
                font-family: 'Helvetica Neue', sans-serif;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }

            .login-container {
                max-width: 420px;
                width: 100%;
                text-align: center;
            }

            .logos {
                display: flex;
                justify-content: center;
                gap: 20px;
                margin-bottom: 20px;
            }

            .logos img {
                height: 80px; /* o más, si querés aún más grande */
                max-width: 100%;
                object-fit: contain;
            }

            .login-title {
                font-size: 20px;
                font-weight: 600;
                margin-bottom: 10px;
            }

            .location {
                color: #666;
                font-size: 14px;
                margin-bottom: 20px;
            }

            input[type="text"], input[type="email"], input[type="password"] {
                border-radius: 8px;
                padding: 14px;
                font-size: 14px;
            }

            .btn-black {
                background-color: #111;
                color: #fff;
                border: none;
                border-radius: 25px;
                padding: 10px 30px;
                font-weight: bold;
                margin-top: 15px;
                transition: background 0.2s ease-in-out;
            }

            .btn-black:hover {
                background-color: #000;
            }

            .terms {
                font-size: 12px;
                color: #666;
                margin-top: 15px;
            }

            .terms a {
                color: #666;
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
    <div class="login-container">

        <div class="logos">
            <a href="<?= base_url('/') ?>">
                <img src="<?= base_url('assets/img/logo-negro.png') ?>" alt="vibeSports Logo" class="img-fluid">
            </a>
        </div>
        
        <div class="login-title">Introducí tu usuario para iniciar sesión.</div>

        <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>

    <form method="post" action="<?= base_url('login') ?>">
            <div class="mb-3">
                <input type="text" name="nombre_usuario" class="form-control" placeholder="Usuario *" required>
            </div>
            <div class="mb-3">
                <input type="password" name="pass_usuario" class="form-control" placeholder="Contraseña *" required>
            <button type="submit" class="btn btn-black w-100">Continuar</button>

            <p class="mt-3" style="font-size: 14px;">
                ¿No estás registrado? 
                <a href="<?= base_url('registro') ?>" class="text-decoration-underline text-dark fw-semibold">Registrate</a>
            </p>
        </form>

        <p class="terms">
            Al continuar, aceptás nuestros <a href="terminos-y-usos">Términos de uso</a>.
        </p>
        </div>
    </body>
</html>
