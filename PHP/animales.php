<?php

include("db.php");


$statement = $conexion_mysql->prepare('SELECT * FROM animales');
$statement->execute();

$animales = $statement->fetchAll();


?>
