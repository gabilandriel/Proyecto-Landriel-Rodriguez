<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff;
            font-family: 'Helvetica Neue', sans-serif;
        }
        .login-container {
            max-width: 400px;
            margin: 80px auto;
            text-align: center;
        }
        .logo img {
            height: 30px;
            margin: 0 10px;
        }
        .form-control {
            border-radius: 8px;
            padding: 15px;
            font-size: 16px;
        }
        .btn-black {
            background-color: #111;
            color: white;
            border-radius: 25px;
            padding: 10px 30px;
            font-weight: bold;
        }
        .btn-black:hover {
            background-color: #000;
        }
        .terms {
            font-size: 13px;
            color: #666;
        }
        .terms a {
            color: #666;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-container">

        <h4 class="mb-3">Introduce tu email para unirte a nosotros o inicia sesión.</h4>
        <p>Argentina</p>

        <form action="<?= base_url('login') ?>" method="post">
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Correo electrónico *" required>
            </div>
            <button type="submit" class="btn btn-black">Continuar</button>
        </form>

        <p class="terms mt-4">
            Al continuar, acepto la <a href="#">Política de privacidad</a> y los <a href="#">Términos de uso</a> de VibeStore.
        </p>
    </div>

</body>
</html>
