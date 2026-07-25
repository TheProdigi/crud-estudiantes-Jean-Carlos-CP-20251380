<?php

include 'includes/conexion.php';

$id = $_POST['id'];
$nombre = trim($_POST['nombre']);
$correo = trim($_POST['correo']);
$carrera = trim($_POST['carrera']);

if ($nombre == "" || $correo == "" || $carrera == "") {

    die("Todos los campos son obligatorios.");

}

if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){

    die("Correo electrónico no válido.");

}

$sql = "UPDATE estudiantes SET nombre='$nombre', correo='$correo', carrera='$carrera'
WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    
    header("Location: index.php");

} else {

    echo "Error al actualizar.";

}

$conn->close();

?>