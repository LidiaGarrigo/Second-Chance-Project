<?php require './PHP/db.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias</title>
    <link rel="stylesheet" href="Css/style.css">
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</head>

<body>

    <div class="fondo">
        <div class="modal">
            <div class="tituloModal">
                <h3>¡Mensaje enviado con éxito!</h3>
            </div>
            <div class="icono">
                <span class="iconify" data-icon="akar-icons:circle-check-fill" style="color: #19ab4f;" data-width="100"></span>
            </div>
            <div class="texto">
                <p>Gracias <?php echo $nombre ?>, en breve nos pondremos en contacto contigo. Primero contactaremos contigo al teléfono facilitado: <?php echo $telefono ?>, en caso de no poder atender a la llamada, te contactaremos vía correo electrónico a <?php echo $email ?>.</p>
            </div>
            <div class="boton">
                <button class="btn-primario" onclick="window.location.href='index.php'">Aceptar</button>
            </div>
        </div>
    </div>

</body>

</html>