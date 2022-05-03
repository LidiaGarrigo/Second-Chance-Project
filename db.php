<?php
$conexion_mysql = mysqli_connect('localhost', 'root', '', 'second_chance', 3306) or die("Error de conexión");
$db = mysqli_select_db($conexion_mysql, "second_chance") or die("Error de conexión a la BD");

$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];


$sqlContacto = "INSERT IGNORE INTO contacto VALUES (NULL,'$nombre', '$telefono', '$email', '$mensaje')";
$ejecutarContacto = mysqli_query($conexion_mysql, $sqlContacto);

$sqlBoletin = "INSERT INTO subscripciones VALUES ('$email')";
$ejecutarBoletin = mysqli_query($conexion_mysql, $sqlBoletin);

$sqlAnimales = "SELECT nombre FROM animales";
$ejecutarAnimales = mysqli_query($conexion_mysql, $sqlAnimales);

if ($ejecutarAnimales = mysqli_query($conexion_mysql, $sqlAnimales)) {

    /* obtener array asociativo */
    while ($row = mysqli_fetch_assoc($ejecutarAnimales)) {
        echo $row["nombre"];
    }

    /* liberar el conjunto de resultados */
    mysqli_free_result($ejecutarAnimales);
}


/* if (mysqli_query($conexion_mysql, $sqlContacto)) {
    $last_id = mysqli_insert_id($conexion_mysql);
    echo "New record created successfully. Last inserted ID is: " . $last_id;
  } else {
    echo "Error: " . $sqlContacto . "<br>" . mysqli_error($conexion_mysql);
  } */

/* if (!$ejecutar) {
    echo "<h1>Error en la conexión!</h1>";
} else{
    echo "<h1>Datos guardados correctamente</h1>";
} */
?>