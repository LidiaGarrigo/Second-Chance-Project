<?php

try {
    $conexion_mysql = new PDO('mysql:host=localhost; dbname=second_chance', 'root', '');

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>