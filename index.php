<?php include 'includes/conexion.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Estudiantes</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">

        <h1>CRUD de Estudiantes</h1>

        <form action="guardar.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="email" name="correo" placeholder="Correo" required>
            <input type="text" name="carrera" placeholder="Carrera" required>
            <button type="submit"> Guardar </button>
        </form>

        <hr>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Carrera</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>

                <?php

                $sql = "SELECT * FROM estudiantes";
                $resultado = $conn->query($sql);

                if ($resultado->num_rows > 0) {

                    while ($fila = $resultado->fetch_assoc()) {

                        ?>

                        <tr>
                            <td><?php echo $fila['id']; ?></td>
                            <td><?php echo $fila['nombre']; ?></td>
                            <td><?php echo $fila['correo']; ?></td>
                            <td><?php echo $fila['carrera']; ?></td>
                            <td> <a href="editar.php?id=<?php echo $fila['id']; ?>">
                                <button type="button">Editar</button>
                                </a>
                            </td>
                        </tr>

                        <?php

                    }

                } else {

                    ?>

                    <tr>
                        <td colspan="5">No hay estudiantes registrados.</td>
                    </tr>

                    <?php

                }

                ?>

            </tbody>

        </table>

    </div>

    <script src="js/app.js"></script>

</body>

</html>