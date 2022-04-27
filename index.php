<?php

$json = file_get_contents('datos.json');
$datos = json_decode($json, true);

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
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

</head>

<body>
    <header id="encabezado">
        <?php require "navbar.php" ?>
        <img src="assets/dogs.png" alt="Imagen no disponible" id="dogsImage">
        <div class="slogan">
            <h1><?php echo $datos['inicio']['eslogan']; ?></h1>
        </div>
    </header>
    <section id="sobreNosotros">
        <h1 class="titulo">Sobre nosotros</h1>
        <div class="contenido">
            <p><?php echo $datos['sobreNosotros']['parrafo1']; ?></p>
            <p><?php echo $datos['sobreNosotros']['parrafo2']['seccion1']; ?><em><b><?php echo $datos['sobreNosotros']['parrafo2']['seccion2']; ?></b></em><?php echo $datos['sobreNosotros']['parrafo2']['seccion3']; ?><b><?php echo $datos['sobreNosotros']['parrafo2']['seccion4']; ?></b><?php echo $datos['sobreNosotros']['parrafo2']['seccion5']; ?></p>
            <p><?php echo $datos['sobreNosotros']['parrafo3']; ?></p>
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
                        <input class="inputCheck" type="checkbox">
                        <label for="perro">Perro (10)</label>
                    </div>
                    <div class="containerCheck">
                        <input class="inputCheck" type="checkbox">
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
                <?php foreach ($datos['adoptaAnimal']['perros'] as $perro) {
                ?>
                    <div class="card" id="perro<?php echo $perro['id']; ?>" onclick="window.location.href='fichaAnimal.php'">
                        <div class="infoCard">
                            <div class="textCard">
                                <span><strong><? echo $perro['nombreAnimal'] ?></strong></span>
                                <span><? echo $perro['sexo'] ?> - <? echo $perro['edad'] ?></span>
                            </div>
                            <button class="buttonCard" onclick="window.location.href='fichaAnimal.php'">Adoptar
                            </button>
                        </div>
                    </div>
                <?php } ?>
                <?php foreach ($datos['adoptaAnimal']['gatos'] as $gato) {
                ?>
                    <div class="card" id="gato<?php echo $gato['id']; ?>" onclick="window.location.href='fichaAnimal.php'">
                        <div class="infoCard">
                            <div class="textCard">
                                <span><strong><? echo $gato['nombreAnimal'] ?></strong></span>
                                <span><? echo $gato['sexo'] ?> - <? echo $gato['edad'] ?></span>
                            </div>
                            <button class="buttonCard" onclick="window.location.href='fichaAnimal.php'">Adoptar
                            </button>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!--    <p class="mas">Mostrar más ...</p> -->

    </section>

    <section id="contacto">
        <h1 class="titulo">Contacto</h1>
    </section>

    <footer>

    </footer>

</body>

</html>