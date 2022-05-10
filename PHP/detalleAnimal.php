<?php

require("db.php");

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if(!$id){
    header("Location: index.php");
}

$statement = $conexion_mysql->prepare('SELECT * FROM animales WHERE id = :id');
$statement->execute(array(':id' => $id));

$animal = $statement->fetch();

if(!$animal){
    header("Location: index.php");
}

?>