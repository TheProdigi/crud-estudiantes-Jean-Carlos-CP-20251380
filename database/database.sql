CREATE DATABASE crud_estudiantes;

USE crud_estudiantes;

CREATE TABLE estudiantes(
    id INT  PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    carrera VARCHAR(100) NOT NULL
);