<?php

include 'includes/conexion.php';

$id = $_GET['id'];

$sql = "DELETE FROM estudiantes WHERE id = $id";

if ($conn->query($sql) === TRUE) {

    header("Location: index.php");

} else {

    echo "Error al eliminar el estudiante.";

}

$conn->close();

?>