<?php

include("conexion.php");

$alumno = $_POST['alumno'];
$grupo = $_POST['grupo'];
$motivo = $_POST['motivo'];
$estado = $_POST['estado'];

$sql = "INSERT INTO casos (alumno, grupo, motivo, estado)
VALUES ('$alumno', '$grupo', '$motivo', '$estado')";

if(mysqli_query($conexion, $sql)){

    header("Location: orientador.php");
    exit();

}else{

    echo "Error al guardar: " . mysqli_error($conexion);

}

?>