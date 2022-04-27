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
    <link rel="stylesheet" href="Css/fichaAnimal.css">
    <link rel="stylesheet" href="Css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">
</head>

<body>
    <header id="encabezado">
        <?php require "navbar.php" ?>
    </header>
    <div class="container">

        <div class="lightBox">
            <div class="row">
                <div class="column">
                    <img src="assets/animales/perros/perro1/perro1.png" style="width:501px;cursor:pointer;" onclick="openModal();currentSlide(1)">
                    <div style="display:flex; justify-content: center; gap: 7px;">
                        <img src="assets/animales/perros/perro1/perro1-1.png" style="width:120px;cursor:pointer;" onclick="openModal();currentSlide(1)">
                        <img src="assets/animales/perros/perro1/perro1-2.png" style="width:120px;cursor:pointer;" onclick="openModal();currentSlide(1)">
                        <img src="assets/animales/perros/perro1/perro1-3.png" style="width:120px;cursor:pointer;" onclick="openModal();currentSlide(1)">
                        <img src="assets/animales/perros/perro1/perro1-4.png" style="width:120px;cursor:pointer;" onclick="openModal();currentSlide(1)">
                    </div>
                </div>

            </div>

            <div id="myModal" class="modal">
                <span class="close cursor" onclick="closeModal()">&times;</span>
                <div class="modal-content">

                    <div class="mySlides">
                        <div class="numbertext">1 / 5</div>
                        <img src="assets/animales/perros/perro1/perro1.png" style="width:100%;">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">2 / 5</div>
                        <img src="assets/animales/perros/perro1/perro1-1.png" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">3 / 5</div>
                        <img src="assets/animales/perros/perro1/perro1-2.png" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">4 / 5</div>
                        <img src="assets/animales/perros/perro1/perro1-3.png" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">5 / 5</div>
                        <img src="assets/animales/perros/perro1/perro1-4.png" style="width:100%">
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                </div>
            </div>
        </div>


        <div class="fichaAnimal">
            <div>
            <h3 class="tituloNombre"><?php echo $datos['adoptaAnimal']['perros'][0]['nombreAnimal']; ?></h3>
            <p class="biografia"><?php echo $datos['adoptaAnimal']['perros'][0]['biografia']; ?></p>
            <p class="descripcion"><strong><?php echo $datos['adoptaAnimal']['perros'][0]['descripcion']; ?></strong></p>
            <ul class="lista">
                <li><? echo $datos['adoptaAnimal']['perros'][0]['lista']['item1']; ?></li>
                <li><? echo $datos['adoptaAnimal']['perros'][0]['lista']['item2']; ?></li>
                <li><? echo $datos['adoptaAnimal']['perros'][0]['lista']['item3']; ?></li>
                <li><? echo $datos['adoptaAnimal']['perros'][0]['lista']['item4']; ?></li>
                <li><? echo $datos['adoptaAnimal']['perros'][0]['lista']['item5']; ?></li>
                <li><? echo $datos['adoptaAnimal']['perros'][0]['lista']['item6']; ?></li>
            </ul>
            </div>
            <div class="containerButton">
                <button onclick="window.location.href='formAdopcion.php'">Adóptame</button>
            </div>
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>
</body>

</html>