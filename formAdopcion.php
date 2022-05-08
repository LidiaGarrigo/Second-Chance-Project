<?php

$json = file_get_contents('textos.json');
$texto = json_decode($json, true);

require './PHP/detalleAnimal.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second chance</title>
    <link rel="stylesheet" href="Css/formAdopcion.css">
    <link rel="stylesheet" href="Css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">
</head>

<body>
    <header id="encabezado">
    <?php require "navbar.php" ?>
    </header>
    <section id="formAdopcion">
        <div id="contenedorForm">

            <h3 class="titulosFormAdopcion">Datos personales</h3>
            <form id="formulario" action="modalFormAdopcion.php" method="POST">
                <input class="inputFormu" type="text" name="nombreAnimal" value="<?php echo $animal['nombre'] ?>" style="display:none">
                <label class="etiquetaFormu" for="">Nombre</label>
                <input class="inputFormu" type="text" placeholder="Escribe tu nombre" name="nombre">
                <label class="etiquetaFormu" for="">Apellidos</label>
                <input class="inputFormu" type="text" placeholder="Escribe tus apellidos" name="apellidos">
                <label class="etiquetaFormu" for="">DNI</label>
                <input class="inputFormu" type="text" placeholder="Escribe tu DNI" name="dni">
                <label class="etiquetaFormu" for="">Teléfono</label>
                <input class="inputFormu" type="tel" placeholder="Escribe tu teléfono" name="telefono">
                <label class="etiquetaFormu" for="">Correo electrónico</label>
                <input class="inputFormu" type="email" placeholder="Escribe tu correo electrónico" name="email">

                <h3 class="titulosFormAdopcion">términos de la adopción</h3>
                <p><?php echo $texto['formularioAdopcion']['parrafo1']; ?></p>
                <p><?php echo $texto['formularioAdopcion']['parrafo2']; ?></p>
                <p><?php echo $texto['formularioAdopcion']['parrafo3']; ?></p>

                <label>
                    <input type="checkbox" id="cbox1" value="sí" name="consentimiento" required><?php echo $texto['formularioAdopcion']['checkbox']; ?>
                </label>
                <div class="contenedor-btn">
                    <button id="btn-confirmar" type="submit">Confirmar adopción</button>

                </div>
            </form>

        </div>
    </section>
</body>

</html>