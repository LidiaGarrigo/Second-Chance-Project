<?php
$conexion_mysql = mysqli_connect('localhost', 'root', '', 'second_chance', 3306) or die("Error de conexión");
$db = mysqli_select_db($conexion_mysql, "second_chance") or die("Error de conexión a la BD");

$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

$sql = "INSERT INTO contacto VALUES ('$nombre', '$telefono', '$email', '$mensaje')";
$ejecutar = mysqli_query($conexion_mysql, $sql);

/* if (!$ejecutar) {
    echo "<h1>Error en la conexión!</h1>";
} else{
    echo "<h1>Datos guardados correctamente</h1>";
} */
?>