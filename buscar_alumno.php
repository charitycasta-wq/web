<?php
include("conexion.php");

$alumno = $_GET['alumno'];

$sql = "SELECT COUNT(*) as total FROM casos WHERE alumno='$alumno'";
$result = mysqli_query($conexion,$sql);

$row = mysqli_fetch_assoc($result);

echo $row['total'];
?>