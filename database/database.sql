CREATE DATABASE crud_estudiantes;

USE crud_estudiantes;

CREATE TABLE estudiantes(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    carrera VARCHAR(100) NOT NULL
);

INSERT INTO estudiantes (nombre, correo, carrera) VALUES
('Jean Carlos', 'jeancarlos@gmail.com', 'Ingeniería en Sistemas'),
('Ana Pérez', 'ana.perez@gmail.com', 'Administración de Empresas'),
('Luis Rodríguez', 'luis.rodriguez@gmail.com', 'Contabilidad'),
('María Gómez', 'maria.gomez@gmail.com', 'Psicología'),
('Carlos Fernández', 'carlos.fernandez@gmail.com', 'Derecho'),
('Sofía Martínez', 'sofia.martinez@gmail.com', 'Medicina'),
('Pedro Sánchez', 'pedro.sanchez@gmail.com', 'Arquitectura'),
('Laura Díaz', 'laura.diaz@gmail.com', 'Ingeniería Industrial'),
('Miguel Herrera', 'miguel.herrera@gmail.com', 'Mercadeo'),
('Valentina Cruz', 'valentina.cruz@gmail.com', 'Educación');