<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrador de Materias y Estudiantes</title>
  <!-- Incluir CSS de Bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h1>Administrador de Materias y Estudiantes</h1>
  <hr>
  <h2>Crear Materia</h2>
  <form action="crear_materia.php" method="POST">
    <div class="form-group">
      <label for="nombreMateria">Nombre de la materia:</label>
      <input type="text" class="form-control" id="nombreMateria" name="nombreMateria" required>
    </div>
    <button type="submit" class="btn btn-primary">Crear Materia</button>
  </form>

  <hr>

  <h2>Crear Estudiante</h2>
  <form action="crear_estudiante.php" method="POST">
    <div class="form-group">
      <label for="nombreEstudiante">Nombre del estudiante:</label>
      <input type="text" class="form-control" id="nombreEstudiante" name="nombreEstudiante" required>
    </div>
    <div class="form-group">
      <label for="materiaEstudiante">Materia:</label>
      <select class="form-control" id="materiaEstudiante" name="materiaEstudiante" required>
        <option value="">Seleccione una materia</option>
        <?php
        $mysqli = new mysqli("localhost", "root", "", "prueba");

        if ($mysqli->connect_error) {
            die("Error en la conexión: " . $mysqli->connect_error);
        }

        $sql = "SELECT id, nombre FROM materias";
        $result = $mysqli->query($sql);


        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<option value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
            }
        } else {
            echo "<option value=''>No hay materias disponibles</option>";
        }

        $mysqli->close();
        ?>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Crear Estudiante</button>
  </form>
</div>

<!-- Incluir JS de Bootstrap y jQuery (opcional) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
