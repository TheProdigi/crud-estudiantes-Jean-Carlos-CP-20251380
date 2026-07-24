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

        <form>
            <input type="text" placeholder="Nombre">
            <input type="email" placeholder="Correo">
            <input type="text" placeholder="Carrera">
            <button type="submit">Guardar</button>
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
                <tr>
                    <td colspan="5">
                        No hay estudiantes registrados.
                    </td>
                </tr>
            </tbody>

        </table>

        </div>

    <script src="js/app.js"></script>

</body>

</html>