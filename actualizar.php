<?php

include 'includes/conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$carrera = $_POST['carrera'];

$sql = "UPDATE estudiantes SET nombre='$nombre', correo='$correo', carrera='$carrera'
WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    
    header("Location: index.php");

} else {

    echo "Error al actualizar.";

}

$conn->close();

?>