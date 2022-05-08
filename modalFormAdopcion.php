<?php

include("./PHP/db.php");

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$dni = $_POST["dni"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$consentimiento = $_POST["consentimiento"];
$nombreAnimal = $_POST["nombreAnimal"];

$statement = $conexion_mysql->prepare("INSERT INTO adoptantes VALUES (NULL,'$nombre', '$apellidos', '$dni', '$telefono', '$email', '$consentimiento', '$nombreAnimal')");
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
    <!-- iconify library -->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</head>

<body style="background: linear-gradient(rgba(255, 255, 255, 0.86),
            rgba(255, 255, 255, 0.86)),
        url('./assets/ContactDog.png') no-repeat; width: 100%; height: 100%;">
    <div id="modalContacto">
        <div class="modal">
            <div class="tituloModal">
                <h3>¡Solicitud enviada con éxito!</h3>
            </div>
            <div class="icono">
                <span class="iconify" data-icon="akar-icons:circle-check-fill" style="color: #19ab4f;" data-width="100"></span>
            </div>
            <div class="texto">
                <p>Gracias <strong><?php echo $nombre ?></strong>, en breve nos pondremos en contacto contigo. Primero contactaremos contigo al teléfono facilitado: <strong><?php echo $telefono ?></strong>, en caso de no poder atender a la llamada, te contactaremos vía correo electrónico a <strong><?php echo $email ?></strong>.</p>
            </div>
            <div class="boton">
                <button class="btn-primario" onclick="window.location.href='index.php'">Aceptar</button>
            </div>
        </div>
    </div>
</body>

</html>