<?php

include 'includes/conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$carrera = $_POST['carrera'];

$sql = "INSERT INTO estudiantes(nombre, correo, carrera)
        VALUES('$nombre', '$correo', '$carrera')";

if ($conn->query($sql) === TRUE) {

    header("Location: index.php");

} else {

    echo "Error al guardar el estudiante.";

}

$conn->close();

?>