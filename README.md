# CRUD de Estudiantes

Sistema CRUD (Create, Read, Update y Delete) desarrollado como proyecto práctico para la asignatura **Programación III**, utilizando **PHP, MySQL, HTML, CSS, JavaScript** y aplicando correctamente la metodología **Git Flow**.

---

# Información del Proyecto

- **Asignatura:** Programación III
- **Profesor:** Kelyn Tejada
- **Estudiante:** Jean Carlos
- **Matrícula:** 20251380
- **Tecnologías utilizadas:**
  - HTML5
  - CSS3
  - JavaScript
  - PHP
  - MySQL
  - Git
  - GitHub
  - Git Flow

---

# Objetivo

Desarrollar un sistema CRUD funcional para la gestión de estudiantes, implementando un flujo de trabajo basado en Git Flow, utilizando ramas, Pull Requests y control de versiones para simular un entorno de desarrollo colaborativo.

---

# Funcionalidades

El sistema permite:

- Registrar estudiantes.
- Visualizar todos los estudiantes registrados.
- Editar la información de un estudiante.
- Eliminar estudiantes.
- Validación básica de formularios.
- Confirmación antes de eliminar registros.
- Interfaz sencilla y fácil de utilizar.

---

# Tecnologías

| Tecnología | Uso |
|------------|-----|
| HTML5 | Estructura del sitio |
| CSS3 | Diseño e interfaz |
| JavaScript | Confirmaciones y comportamiento del navegador |
| PHP | Lógica del sistema |
| MySQL | Base de datos |
| Git | Control de versiones |
| GitHub | Alojamiento del repositorio |

---

# Estructura del proyecto

```
crud-estudiantes/
│
├── css/
│   └── style.css
│
├── includes/
│   └── conexion.php
│
├── database/
│   └── database.sql
├── index.php
├── guardar.php
├── editar.php
├── actualizar.php
├── eliminar.php
└── README.md
```

---

# Base de datos

Nombre de la base de datos:

```
crud_estudiantes
```

Tabla utilizada:

```
estudiantes
```

Campos:

| Campo | Tipo |
|--------|------|
| id | INT AUTO_INCREMENT |
| nombre | VARCHAR(100) |
| correo | VARCHAR(100) |
| carrera | VARCHAR(100) |

---

# Instalación

## 1. Clonar el repositorio

```bash
git clone URL_DEL_REPOSITORIO
```

## 2. Abrir el proyecto

Copiar la carpeta dentro del servidor local.

Ejemplo:

```
xampp/htdocs/
```

## 3. Crear la base de datos

Abrir **phpMyAdmin**.

Crear una base de datos llamada:

```
crud_estudiantes
```

## 4. Ejecutar el script SQL

Importar el archivo:

```
database.sql
```

## 5. Configurar la conexión

Abrir:

```
includes/conexion.php
```

Verificar que los datos sean correctos.

Ejemplo:

```php
$host = "localhost";
$user = "root";
$password = "";
$database = "crud_estudiantes";
```

## 6. Ejecutar el proyecto

Abrir el navegador y acceder a:

```
http://localhost/crud-estudiantes/
```

# Cómo probar el sistema

## Crear estudiante

1. Completar el formulario.
2. Presionar **Guardar**.
3. Verificar que aparezca en la tabla.

---

## Editar estudiante

1. Presionar **Editar**.
2. Modificar los datos.
3. Guardar cambios.
4. Verificar la actualización.

---

## Eliminar estudiante

1. Presionar **Eliminar**.
2. Confirmar la acción.
3. Verificar que desaparezca de la tabla.

---

# Git Flow implementado

Durante el desarrollo se utilizó la metodología Git Flow.

### Ramas principales

- main
- developer
- qa

### Ramas de desarrollo

- feature/project-structure
- feature/create-students
- feature/update-students
- feature/delete-students
- hotfix/fix-form-validation

---

# Pull Requests

Se realizaron Pull Requests desde cada rama hacia:

- developer
- qa
- main

Cumpliendo con los requisitos establecidos para la práctica.

---

# Aprendizajes obtenidos

Durante el desarrollo de este proyecto se reforzaron conocimientos sobre:

- Git
- GitHub
- Git Flow
- Creación de ramas
- Pull Requests
- Merge
- HTML
- CSS
- JavaScript
- PHP
- MySQL
- Desarrollo de aplicaciones CRUD

---

# Autor

**Jean Carlos Cabral Paniagua 2025-1380**

Proyecto desarrollado como práctica de la asignatura **Programación III**.

---

# Licencia

Proyecto desarrollado únicamente con fines académicos.