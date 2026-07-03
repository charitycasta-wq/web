<?php
$host     = "localhost";
$user     = "root";
$password = "";
$dbname   = "reportess";

$conexion = mysqli_connect($host, $user, $password, $dbname);

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>