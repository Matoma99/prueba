<?php
$mysqli = new mysqli("localhost", "root", "", "prueba");

if ($mysqli->connect_error) {
    die("Error en la conexión: " . $mysqli->connect_error);
}

$nombreEstudiante = $_POST['nombreEstudiante'];
$materiaEstudiante = $_POST['materiaEstudiante'];

$sql = "INSERT INTO estudiantes (nombre, materia_id) VALUES ('$nombreEstudiante', '$materiaEstudiante')";
if ($mysqli->query($sql) === TRUE) {
    echo "Estudiante creado exitosamente.";
} else {
    echo "Error al crear el estudiante: " . $mysqli->error;
}

$mysqli->close();
?>