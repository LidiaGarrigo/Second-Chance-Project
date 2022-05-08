<?php

$json = file_get_contents('textos.json');
$texto = json_decode($json, true);

include("./PHP/animales.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second chance</title>
    <link rel="stylesheet" href="Css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Playfair+Display&display=swap" rel="stylesheet">
    <script src="JS/script.js"></script>
    <!-- iconify library -->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</head>

<body>
    <header id="encabezado">
        <?php require "navbar.php" ?>
        <img src="assets/dogs.png" alt="Imagen no disponible" id="dogsImage">
        <div class="slogan">
            <h1><?php echo $texto['inicio']['eslogan']; ?></h1>
        </div>
    </header>
    <section id="sobreNosotros">
        <h1 class="titulo">Sobre nosotros</h1>
        <div class="contenido">
            <p><?php echo $texto['sobreNosotros']['parrafo1']; ?></p>
            <p><?php echo $texto['sobreNosotros']['parrafo2']['seccion1']; ?><em><b><?php echo $texto['sobreNosotros']['parrafo2']['seccion2']; ?></b></em><?php echo $texto['sobreNosotros']['parrafo2']['seccion3']; ?><b><?php echo $texto['sobreNosotros']['parrafo2']['seccion4']; ?></b><?php echo $texto['sobreNosotros']['parrafo2']['seccion5']; ?></p>
            <p><?php echo $texto['sobreNosotros']['parrafo3']; ?></p>
        </div>
        <img src="assets/compis.png" alt="Imagen no disponible">
    </section>

    <section id="adoptaUnAnimal">
        <h1 class="titulo">Adopta un animal</h1>

        <div class="main">

            <aside id="sidebar" style="float: left;">

                <div class="contenedorFiltro">
                    <div class="containerLabel">
                        <label for="" class="label">Buscador</label>
                    </div>
                    <div class="inputBuscar">
                        <input class="input" type="text" placeholder="Buscar">
                        <span class="iconify" data-icon="ant-design:search-outlined" style="color: #a09592;"></span>
                    </div>
                </div>

                <div class="contenedorFiltro">
                    <div class="containerLabel">
                        <label for="" class="label">Filtrar por especie</label>
                    </div>
                    <div class="containerCheck">
                        <input class="inputCheck" type="checkbox" checked="checked">
                        <label for="perro">Perro (10)</label>
                    </div>
                    <div class="containerCheck">
                        <input class="inputCheck" type="checkbox" checked="checked">
                        <label for="gato">Gato (5)</label>
                    </div>
                </div>

                <div class="contenedorFiltro">
                    <div class="containerLabel">
                        <label for="" class="label">Filtrar por sexo</label>
                    </div>
                    <div class="containerCheck">
                        <input class="inputCheck" type="radio" name="sexo">
                        <label for="perro">Macho (8)</label>
                    </div>
                    <div class="containerCheck">
                        <input class="inputCheck" type="radio" name="sexo">
                        <label for="gato">Hembra (7)</label>
                    </div>
                </div>

                <div class="contenedorFiltro">
                    <div class="containerLabel">
                        <label for="" class="label">Filtrar por tamaño</label>
                    </div>
                    <div class="containerCheck">
                        <input class="inputCheck" type="radio" name="tamano">
                        <label for="perro">Pequeño (4)</label>
                    </div>
                    <div class="containerCheck">
                        <input class="inputCheck" type="radio" name="tamano">
                        <label for="gato">Mediano (7)</label>
                    </div>
                    <div class="containerCheck">
                        <input class="inputCheck" type="radio" name="tamano">
                        <label for="gato">Grande (4)</label>
                    </div>
                </div>

            </aside>

            <div class="containerCards">
                <?php foreach ($animales as $animal) : ?>
                    <div class="card" id="animal<?php echo $animal['id']; ?>" onclick="window.location.href='fichaAnimal.php?id=<?php echo $animal['id']; ?>'">
                        <div class="infoCard">
                            <div class="textCard">
                                <span><strong><?php echo $animal['nombre'] ?></strong></span>
                                <span><?php echo $animal['sexo'] ?> - <?php echo $animal['edad'] ?> años</span>
                            </div>
                            <button class="buttonCard" onclick="window.location.href='fichaAnimal.php?id=<?php echo $animal['id']; ?>'">Adoptar
                            </button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!--    <p class="mas">Mostrar más ...</p> -->

    </section>

    <section id="contacto">
        <h1 class="titulo">Contacto</h1>
        <div id="contenedorContacto">
            <h2>¿En qué podemos ayudarte?</h2>
            <form id="formu" action="contacto.php" name="formulario" method="POST">
                <label class="etiquetaFormu" for="nombre">Nombre</label>
                <input class="inputFormu" type="text" placeholder="Escribe tu nombre" name="nombre" id="nombre" required>

                <label class="etiquetaFormu" for="telefono">Teléfono</label>
                <input class="inputFormu" type="tel" placeholder="Escribe tu teléfono" name="telefono" id="telefono" required>

                <label class="etiquetaFormu" for="email">Correo electrónico</label>
                <input class="inputFormu" type="email" placeholder="Escribe tu correo electrónico" name="email" id="email" required>

                <label class="etiquetaFormu" for="mensaje">Mensaje</label>
                <textarea class="inputFormu" placeholder="Escribe lo que quieras comentarnos" name="mensaje" id="mensaje" cols="30" rows="10" required></textarea>

                <button class="btn-primario" type="submit" onclick="modalContacto()">Enviar</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="datosEmpresa">
            <img id="whiteLogo" src="assets/logos/second_chance-modified.png" alt="logo en blanco y negro" width="200">
            <p>Pg. de Gràcia, 1, 08007 Barcelona</p>
            <p>932 95 05 00</p>
            <p>secondchance@gmail.com</p>
            <div class="socialLinks">
                <img src="assets/socialLinks/Instagram.png" alt="Instagram">
                <img src="assets/socialLinks/Linkedin.png" alt="Linkedin">
                <img src="assets/socialLinks/Twitter.png" alt="Twitter">
                <img src="assets/socialLinks/Youtube.png" alt="Youtube">
            </div>
            <p>Copyright © 2022 Second Chance. All rights reserved</p>
        </div>
        <div class="horarioTextosBoletin">
            <div class="horarioAtencion">
                <h3 class="titulosFooter">Horario de atención</h3>
                <div class="horario">
                    <div class="dias">
                        <p>Lunes:</p>
                        <p>Martes:</p>
                        <p>Miércoles:</p>
                        <p>Jueves:</p>
                        <p>Viernes:</p>
                        <p>Sábado:</p>
                        <p>Domingo:</p>
                    </div>
                    <div class="horas">
                        <p>9:00h-15:00h</p>
                        <p>9:00h-15:00h</p>
                        <p>9:00h-15:00h</p>
                        <p>9:00h-15:00h</p>
                        <p>9:00h-14:00h</p>
                        <p>9:00h-14:00h</p>
                        <p>9:00h-12:00h</p>
                    </div>
                </div>
            </div>
            <div class="textosLegales">
                <h3 class="titulosFooter">Textos legales</h3>
                <p>Política de privacidad</p>
                <p>Política legal</p>
                <p>Política de cookies</p>
            </div>
            <div class="boletin">
                <h3 class="titulosFooter">Suscríbete a nuestro boletín de noticias</h3>
                <form action="boletin.php" method="POST" class="boletinForm">
                    <div class="inputBoletin">
                        <input type="text" placeholder="Escribe tu correo electrónico" name="emailB" id="email">
                        <button type="submit" class="btnIcon"><span class="iconify" data-icon="icon-park-outline:send" style="color: white;" data-width="24"></span></button>
                    </div>
                </form>
            </div>
        </div>

    </footer>

</body>

</html>