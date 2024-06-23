-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS gestion_educativa;

-- Usar la base de datos
USE gestion_educativa;

-- Crear la tabla Curso
CREATE TABLE IF NOT EXISTS Curso (
    id_curso INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL
);

-- Crear la tabla Turno
CREATE TABLE IF NOT EXISTS Turno (
    id_turno INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL
);
-- Crear la tabla Asignatura
CREATE TABLE IF NOT EXISTS Asignatura (
    id_asignatura INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    curso_id INT,
    turno_id INT,
    FOREIGN KEY (curso_id) REFERENCES Curso(id_curso),
    FOREIGN KEY (turno_id) REFERENCES Turno(id_turno)
);



-- Crear la tabla TipoUsuario
CREATE TABLE IF NOT EXISTS TipoUsuario (
    id_tipo_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL
);

-- Crear la tabla Usuario
CREATE TABLE IF NOT EXISTS Usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
	contraseña VARCHAR (50) NOT NULL,
    tipo_usuario_id INT,
    FOREIGN KEY (tipo_usuario_id) REFERENCES TipoUsuario(id_tipo_usuario)
);

-- Crear la tabla Estudiante
CREATE TABLE IF NOT EXISTS Estudiante (
    id_estudiante INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    edad INT,
    nombre_tutor varchar(100),
    telefono int,
    curso_id INT,
    genero varchar(50),
    turno_id INT,
    total_asistencias INT DEFAULT 0,
    FOREIGN KEY (curso_id) REFERENCES Curso(id_curso),
    FOREIGN KEY (turno_id) REFERENCES Turno(id_turno)
);

-- Crear la tabla Profesor
CREATE TABLE IF NOT EXISTS Profesor (
    id_profesor INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    correo varchar(100),
    telefono int,
    fecha_inicio date,
    asignatura_id INT,
    genero varchar(50),
    tipo_usuario_id INT,
    turno_id INT,
    FOREIGN KEY (turno_id) REFERENCES Turno(id_turno),
    FOREIGN KEY (asignatura_id) REFERENCES Asignatura(id_asignatura),
    FOREIGN KEY (tipo_usuario_id) REFERENCES TipoUsuario(id_tipo_usuario)
);

-- Crear la tabla Director
CREATE TABLE IF NOT EXISTS Director (
    id_director INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100),
    telefono VARCHAR(20),
    fecha_inicio DATE,
    turno_id INT,
    tipo_usuario_id INT,
    FOREIGN KEY (turno_id) REFERENCES Turno(id_turno),
    FOREIGN KEY (tipo_usuario_id) REFERENCES TipoUsuario(id_tipo_usuario)
);

-- Crear la tabla EstadoAsistencia
CREATE TABLE IF NOT EXISTS EstadoAsistencia (
    id_estado_asistencia INT PRIMARY KEY AUTO_INCREMENT,
    estado VARCHAR(20) NOT NULL
);

-- Crear la tabla AsistenciaEstudiante
CREATE TABLE IF NOT EXISTS AsistenciaEstudiante (
    id_asistencia_estudiante INT PRIMARY KEY AUTO_INCREMENT,
    estudiante_id INT,
    curso_id INT,
    turno_id int,
    asignatura_id int,
    profesor_id int,
    fecha DATE,
    estado_id INT,
    FOREIGN KEY (profesor_id) REFERENCES Profesor(id_profesor),
     FOREIGN KEY (asignatura_id) REFERENCES Asignatura(id_asignatura),
     FOREIGN KEY (turno_id) REFERENCES Turno(id_turno),
    FOREIGN KEY (estudiante_id) REFERENCES Estudiante(id_estudiante),
    FOREIGN KEY (curso_id) REFERENCES Curso(id_curso),
    FOREIGN KEY (estado_id) REFERENCES EstadoAsistencia(id_estado_asistencia)
);
-- Crear la tabla AsistenciaEstudiante
CREATE TABLE IF NOT EXISTS AsistenciaEstudiante (
    id_asistencia_estudiante INT PRIMARY KEY AUTO_INCREMENT,
    estudiante_id INT,
    curso_id INT,
    turno_id int,
    asignatura_id int,
    profesor_id int,
    fecha DATE,
    estado_id INT,
    FOREIGN KEY (profesor_id) REFERENCES Profesor(id_profesor),
     FOREIGN KEY (asignatura_id) REFERENCES Asignatura(id_asignatura),
     FOREIGN KEY (turno_id) REFERENCES Turno(id_turno),
    FOREIGN KEY (estudiante_id) REFERENCES Estudiante(id_estudiante),
    FOREIGN KEY (curso_id) REFERENCES Curso(id_curso),
    FOREIGN KEY (estado_id) REFERENCES EstadoAsistencia(id_estado_asistencia)
);
-- Crear la tabla AsistenciaEstudiante
CREATE TABLE IF NOT EXISTS MostrarAsistencia (
    id_mostrar INT PRIMARY KEY AUTO_INCREMENT,
    estudiante_id int,
    estado varchar(50),
    FOREIGN KEY (estudiante_id) REFERENCES Estudiante(id_estudiante)
);



-- Crear la tabla AsistenciaDocente
CREATE TABLE IF NOT EXISTS AsistenciaDocente (
    id_asistencia_docente INT PRIMARY KEY AUTO_INCREMENT,
    profesor_id INT,
    curso_id INT,
    fecha DATE,
    dia_semana ENUM('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'),
    estado_id INT,
    FOREIGN KEY (profesor_id) REFERENCES Profesor(id_profesor),
    FOREIGN KEY (curso_id) REFERENCES Curso(id_curso),
    FOREIGN KEY (estado_id) REFERENCES EstadoAsistencia(id_estado_asistencia)
);

-- Insertar datos de ejemplo en la tabla Curso
INSERT INTO Curso (nombre) VALUES
('1ro de Secundaria'),
('2do de Secundaria'),
('3ro de Secundaria');

-- Insertar datos de ejemplo en la tabla Asignatura
INSERT INTO Asignatura (nombre) VALUES
('Matemáticas'),
('Lenguaje'),
('Ciencias Naturales'),
('Historia'),
('Inglés');

-- Insertar datos de ejemplo en la tabla Turno
INSERT INTO Turno (nombre) VALUES
('Mañana'),
('Tarde'),
('Noche');

-- Insertar datos de ejemplo en la tabla TipoUsuario
INSERT INTO TipoUsuario (nombre) VALUES
('Profesor'),
('Director');

-- Insertar datos de ejemplo en la tabla Usuario
INSERT INTO Usuario (username, tipo_usuario_id, contraseña) VALUES
('profesor1', 1, 'pass1'),
('profesor2', 1, 'pass2'),
('profesor3', 1, 'pass3'),
('profesor4', 1, 'pass4'),
('profesor5', 1, 'pass5'),
('profesor6', 1, 'pass6'),
('profesor7', 1, 'pass7'),
('profesor8', 1, 'pass8'),
('profesor9', 1, 'pass9'),
('profesor10', 1, 'pass10'),
('director1', 2, 'pass11');

-- Insertar datos de ejemplo en la tabla Estudiante
INSERT INTO Estudiante (nombre, edad, curso_id, turno_id)
VALUES
('Estudiante 1', 15, 1, 1),
('Estudiante 2', 16, 1, 2),
('Estudiante 3', 15, 2, 1),
('Estudiante 4', 16, 2, 2),
('Estudiante 5', 14, 3, 3),
('Estudiante 6', 15, 3, 1),
('Estudiante 7', 16, 1, 3),
('Estudiante 8', 14, 2, 3),
('Estudiante 9', 15, 3, 2),
('Estudiante 10', 14, 1, 2);

-- Insertar datos de ejemplo en la tabla Profesor
INSERT INTO Profesor (nombre, asignatura_id, tipo_usuario_id)
VALUES
('Profesor 1',1, 1),
('Profesor 2', 2, 1),
('Profesor 3', 3, 1),
('Profesor 4', 1, 1),
('Profesor 5',2, 1),
('Profesor 6', 3, 1),
('Profesor 7', 1, 1),
('Profesor 8',2, 1),
('Profesor 9',3, 1),
('Profesor 10',1, 1);

-- Insertar datos de ejemplo en la tabla Director
INSERT INTO Director (nombre, correo, telefono, fecha_inicio, turno_id, tipo_usuario_id)
VALUES
('Director Ejemplo', 'director@example.com', '123456789', '2023-01-01', 1, 2);

-- Insertar datos de ejemplo en la tabla EstadoAsistencia
INSERT INTO EstadoAsistencia (estado) VALUES
('Presente'),
('Ausente'),
('Tarde');

-- Insertar datos de ejemplo en la tabla AsistenciaEstudiante
INSERT INTO AsistenciaEstudiante (estudiante_id, curso_id, fecha, estado_id)
VALUES
(1, 1, '2023-05-01', 1),
(2, 1, '2023-05-01', 2),
(3, 2, '2023-05-01', 1),
(4, 2, '2023-05-01', 1),
(5, 3, '2023-05-01', 2),
(6, 3, '2023-05-01', 1),
(7, 1, '2023-05-01', 1),
(8, 2, '2023-05-01', 1),
(9, 3, '2023-05-01', 2),
(10, 1, '2023-05-01', 1);

-- Insertar datos de ejemplo en la tabla AsistenciaDocente
INSERT INTO AsistenciaDocente (profesor_id, curso_id, fecha, estado_id)
VALUES
(1, 1, '2023-05-01', 1),
(2, 2, '2023-05-01', 1),
(3, 3, '2023-05-01', 2),
(4, 1, '2023-05-01', 1),
(5, 2, '2023-05-01', 2),
(6, 3, '2023-05-01', 1),
(7, 1, '2023-05-01', 1),
(8, 2, '2023-05-01', 1),
(9, 3, '2023-05-01', 2),
(10, 1, '2023-05-01', 1);

-- Crear el trigger after_insert_asistencia_estudiante
DELIMITER //

CREATE TRIGGER after_insert_asistencia_estudiante
AFTER INSERT ON AsistenciaEstudiante
FOR EACH ROW
BEGIN
    UPDATE Estudiante 
    SET total_asistencias = total_asistencias + 1
    WHERE id_estudiante = NEW.estudiante_id;
END //

DELIMITER ;

-- Consultas Sencillas
-- Consulta 1: Mostrar los nombres de todos los estudiantes
SELECT nombre FROM Estudiante;

-- Consulta 2: Mostrar los nombres de todos los profesores
SELECT nombre FROM Profesor;

-- Consultas de Grupos
-- Consulta 1: Mostrar la cantidad de estudiantes matriculados por edad
SELECT edad, COUNT(*) AS cantidad_estudiantes
FROM Estudiante
GROUP BY edad;

-- Consulta 2: Mostrar la cantidad de profesores por asignatura
SELECT Asignatura.nombre AS asignatura, COUNT(*) AS cantidad_profesores
FROM Profesor
JOIN Asignatura ON Profesor.asignatura_id = Asignatura.id_asignatura
GROUP BY Asignatura.nombre;

-- Calcular el porcentaje de asistencia de cada estudiante
SELECT 
    estudiante_id,
    (SUM(CASE WHEN estado_id = 1 THEN 1 ELSE 0 END) / COUNT(*)) * 100 AS porcentaje_asistencia
FROM AsistenciaEstudiante
GROUP BY estudiante_id;

-- Consulta multitabla para mostrar el nombre del estudiante y su porcentaje de asistencia
SELECT 
    Estudiante.nombre AS nombre_estudiante, 
    Asistencia.porcentaje_asistencia
FROM 
    Estudiante
JOIN 
    (SELECT 
         estudiante_id,
         (SUM(CASE WHEN estado_id = 1 THEN 1 ELSE 0 END) / COUNT(*)) * 100 AS porcentaje_asistencia
     FROM 
         AsistenciaEstudiante
     GROUP BY 
         estudiante_id) AS Asistencia
ON 
    Estudiante.id_estudiante = Asistencia.estudiante_id;