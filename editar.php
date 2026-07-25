<?php

include 'includes/conexion.php';

$id = $_GET['id'];

$sql = "SELECT * FROM estudiantes WHERE id = $id";
$resultado = $conn->query($sql);

$estudiante = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Editar Estudiante</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>

    <div class="container">

        <h1>Editar Estudiante</h1>

        <form action="actualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $estudiante['id']; ?>">
            <input type="text" name="nombre" value="<?php echo $estudiante['nombre']; ?>" required>
            <input type="email" name="correo" value="<?php echo $estudiante['correo']; ?>" required>
            <input type="text" name="carrera" value="<?php echo $estudiante['carrera']; ?>" required>
            <button type="submit"> Actualizar </button>
        </form>

    </div>

</body>

</html>