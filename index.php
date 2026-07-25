<?php include 'includes/conexion.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Estudiantes</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>

    <div class="container">

        <h1>Sistema de Gestion de Estudiantes</h1>
        <p> Proyecto CRUD desarrollado con HTML, CSS, PHP, MySQL, y Git Flow.</p>
        <p class="fecha"><?php echo "Fecha: " . date("d/m/Y");?></p>

        <form action="guardar.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="email" name="correo" placeholder="Correo" required>
            <input type="text" name="carrera" placeholder="Carrera" required>
            <button type="submit"> Guardar </button>
            <button type="reset"> Limpiar </button>
        </form>

        <hr>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Carrera</th>
                    <th colspan="2">Acciones</th>
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
                               <button type="button" class="btn-edit">Editar</button>
                                </a>
                            </td>
                            <td>
                                <a href="eliminar.php?id=<?php echo $fila['id']; ?>"
                                    onclick="return confirm('¿Seguro que deseas eliminar este estudiante?');">
                                    <button type="button" class="btn-delete">Eliminar</button>
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

    <footer>
        <p>© 2026 - Programación III | CRUD de Estudiantes</p>
    </footer>

    <script src="js/app.js"></script>

</body>

</html>