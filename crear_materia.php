<?php
$mysqli = new mysqli("localhost", "root", "", "prueba");

if ($mysqli->connect_error) {
    die("Error en la conexión: " . $mysqli->connect_error);
}

$nombreMateria = $_POST['nombreMateria'];

$sql = "INSERT INTO materias (nombre) VALUES ('$nombreMateria')";
if ($mysqli->query($sql) === TRUE) {
    echo "Materia creada exitosamente.";
} else {
    echo "Error al crear la materia: " . $mysqli->error;
}

$mysqli->close();
?>