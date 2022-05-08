<?php

require './PHP/detalleAnimal.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second chance</title>
    <link rel="stylesheet" href="Css/fichaAnimal.css">
    <link rel="stylesheet" href="Css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">
    <script src="JS/lightbox.js"></script>
</head>

<body>
    <header id="encabezado">
        <?php require "navbar.php" ?>
    </header>
    <div class="container">

        <div class="lightBox">
            <div class="row">
                <div class="column">
                    <img id="imgCentral" src="assets/animales/animal<?php echo $animal['id'] ?>/<?php echo $animal['especie'] ?><?php echo $animal['id'] ?>.png" onclick="openModal();currentSlide(1)">
                    <div id="contenedorImg">
                        <img src="assets/animales/animal<?php echo $animal['id'] ?>/<?php echo $animal['especie'] ?><?php echo $animal['id'] ?>-1.jpg" onclick="openModal();currentSlide(2)">
                        <img src="assets/animales/animal<?php echo $animal['id'] ?>/<?php echo $animal['especie'] ?><?php echo $animal['id'] ?>-2.jpg" onclick="openModal();currentSlide(3)">
                        <img src="assets/animales/animal<?php echo $animal['id'] ?>/<?php echo $animal['especie'] ?><?php echo $animal['id'] ?>-3.jpg" onclick="openModal();currentSlide(4)">
                        <img src="assets/animales/animal<?php echo $animal['id'] ?>/<?php echo $animal['especie'] ?><?php echo $animal['id'] ?>-4.jpg" onclick="openModal();currentSlide(5)">
                    </div>
                </div>

            </div>


            <div id="myModal">
                <span class="close cursor" onclick="closeModal()">&times;</span>
                <div class="modal-content">

                    <div class="mySlides">
                        <div class="numbertext">1 / 5</div>
                        <img src="assets/animales/animal<?php echo $animal['id'] ?>/<?php echo $animal['especie'] ?><?php echo $animal['id'] ?>.png" style="width:100%;">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">2 / 5</div>
                        <img src="assets/animales/animal<?php echo $animal['id'] ?>/<?php echo $animal['especie'] ?><?php echo $animal['id'] ?>-1.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">3 / 5</div>
                        <img src="assets/animales/animal<?php echo $animal['id'] ?>/<?php echo $animal['especie'] ?><?php echo $animal['id'] ?>-2.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">4 / 5</div>
                        <img src="assets/animales/animal<?php echo $animal['id'] ?>/<?php echo $animal['especie'] ?><?php echo $animal['id'] ?>-3.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">5 / 5</div>
                        <img src="assets/animales/animal<?php echo $animal['id'] ?>/<?php echo $animal['especie'] ?><?php echo $animal['id'] ?>-4.jpg" style="width:100%">
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                </div>
            </div>


        </div>


        <div class="fichaAnimal">
            <div>
                <h3 class="tituloNombre">
                    <?php if (!empty($animal['nombre'])) {
                        echo $animal['nombre'];
                    } else {
                        echo "Animal: " . $animal['id'];
                    }
                    ?>
                </h3>

                <p class="biografia"><?php echo $animal['biografia']; ?></p>
                <p class="descripcion"><strong>Descripción</strong></p>
                <ul class="lista">
                    <li>Sexo: <?php echo $animal['sexo']; ?></li>
                    <li>Raza: <?php echo $animal['raza']; ?></li>
                    <li>Tamaño: <?php echo $animal['tamano']; ?></li>
                    <li>Peso: <?php echo $animal['peso']; ?> kg</li>
                    <li>Fecha de nacimiento: <?php echo $animal['fnacimiento']; ?></li>
                    <li>Otra información: <?php echo $animal['informacion']; ?></li>
                </ul>
            </div>
            <div class="containerButton">
                <button onclick="window.location.href='formAdopcion.php?id=<?php echo $animal['id']; ?>'">Adóptame</button>
            </div>
        </div>
    </div>

</body>

</html>