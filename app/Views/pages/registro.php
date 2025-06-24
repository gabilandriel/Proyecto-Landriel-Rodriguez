<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - vibeSports</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff;
            font-family: 'Helvetica Neue', sans-serif;
            min-height: 100vh;
            padding-top: 40px;
            padding-bottom: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .register-container {
            max-width: 420px;
            width: 100%;
            text-align: center;
        }

        .logo img {
            height: 80px;
            margin-bottom: 20px;
        }

        .form-control {
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

        <div class="register-container">

            <div class="logo">
                <a href="<?= base_url('/') ?>">
                    <img src="<?= base_url('assets/img/logo-negro.png') ?>" alt="vibeSports">
                </a>
            </div>

            <h5 class="mb-3 fw-semibold">Unite a nosotros y se parte de vibeSports</h5>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>

            <form action="<?= base_url('registro/guardar') ?>" method="post">
                <div class="mb-3">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre *" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="apellido" class="form-control" placeholder="Apellido *" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="dni" class="form-control" placeholder="DNI *" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="direccion" class="form-control" placeholder="Dirección *" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="nombre_usuario" class="form-control" placeholder="Usuario *" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="pass_usuario" class="form-control" placeholder="Contraseña *" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="confirmar_pass" class="form-control" placeholder="Confirmar contraseña *" required>
                </div>
                <button type="submit" class="btn btn-black w-100">Registrarme</button>
            </form>

            <p class="terms">
                Al registrarte, aceptás nuestros <a href="<?= base_url('terminos-y-usos') ?>">Términos de uso</a>.
            </p>

            <p class="mt-2" style="font-size: 14px;">
                ¿Ya tenés cuenta? <a href="<?= base_url('login') ?>" class="text-decoration-underline text-dark fw-semibold">Iniciar sesión</a>
            </p>

        </div>

    </body>
</html>
