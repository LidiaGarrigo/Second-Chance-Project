<?php

include("./PHP/db.php");

$email = $_POST["emailB"];

$statement = $conexion_mysql->prepare("INSERT INTO subscripciones VALUES (NULL, '$email')");
$statement->execute();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias</title>
    <link rel="stylesheet" href="Css/style.css">
    <script src="JS/script.js"></script>
    <!-- iconify library -->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</head>

<body style="background: linear-gradient(rgba(255, 255, 255, 0.86),
            rgba(255, 255, 255, 0.86)),
        url('./assets/ContactDog.png') no-repeat; width: 100%; height: 100%;">



    <div id="modalContacto">
        <div class="modal">
            <div class="tituloModal">
                <h3>¡Te has subscrito con éxito!</h3>
            </div>
            <div class="icono">
                <span class="iconify" data-icon="akar-icons:circle-check-fill" style="color: #19ab4f;" data-width="100"></span>
            </div>
            <div class="texto">
                <p>Gracias, te informaremos de nuevas publicaciones vía correo electrónico a <?php echo $email ?>.</p>
            </div>
            <div class="boton">
                <button class="btn-primario" onclick="window.location.href='index.php'">Aceptar</button>
            </div>
        </div>
    </div>

</body>

</html>