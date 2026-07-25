<?php

include 'includes/conexion.php';

$nombre = trim($_POST['nombre']);
$correo = trim($_POST['correo']);
$carrera = trim($_POST['carrera']);

if ($nombre == "" || $correo == "" || $carrera == "") {

    die("Todos los campos son obligatorios.");

}

if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){

    die("Correo electrónico no válido.");

}

$sql = "INSERT INTO estudiantes(nombre, correo, carrera)
        VALUES('$nombre', '$correo', '$carrera')";

if ($conn->query($sql) === TRUE) {

    header("Location: index.php");

} else {

    echo "Error al guardar el estudiante.";

}

$conn->close();

?>