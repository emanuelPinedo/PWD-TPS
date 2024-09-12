<?php
include_once "../../config.php";

$dni = isset($_GET['dni']) ? $_GET['dni'] : '';

if (empty($dni)) {
  echo "<p>DNI no proporcionado.</p>";
  exit;
}

$controladorPersona = new ABMPersona();
$controladorAuto = new ABMAuto();

// Buscar la persona por dni anashei :v
$persona = $controladorPersona->buscar(['NroDni' => $dni]);

if ($persona) {
  $persona = $persona[0];

  echo "<h1>Detalles de la Persona</h1>";
  echo "<table border='1'>";
  echo "<tr><th>DNI</th><th>Nombre</th><th>Apellido</th><th>Fecha de Nacimiento</th><th>Teléfono</th><th>Domicilio</th></tr>";
  echo "<tr>";
  echo "<td>" . htmlspecialchars($persona['NroDni']) . "</td>";
  echo "<td>" . htmlspecialchars($persona['Nombre']) . "</td>";
  echo "<td>" . htmlspecialchars($persona['Apellido']) . "</td>";
  echo "<td>" . htmlspecialchars($persona['fechaNac']) . "</td>";
  echo "<td>" . htmlspecialchars($persona['Telefono']) . "</td>";
  echo "<td>" . htmlspecialchars($persona['Domicilio']) . "</td>";
  echo "</tr>";
  echo "</table>";

  $autos = $controladorAuto->buscar(['DniDuenio' => $persona['NroDni']]);

  echo "<h2>Autos Asociados</h2>";
  echo "<table border='1'>";
  echo "<tr><th>Patente</th><th>Marca</th><th>Modelo</th></tr>";

  if ($autos) {
    foreach ($autos as $auto) {
      echo "<tr>";
      echo "<td>" . htmlspecialchars($auto['Patente']) . "</td>";
      echo "<td>" . htmlspecialchars($auto['Marca']) . "</td>";
      echo "<td>" . htmlspecialchars($auto['Modelo']) . "</td>";
      echo "</tr>";
    }
  } else {
    echo "<tr><td colspan='3'>No se encontraron autos para esta persona.</td></tr>";
  }

  echo "</table>";
} else {
  echo "<p>No se encontró la persona con el DNI proporcionado.</p>";
}
?>
<a href="http://localhost/PWD-TPS/TP4/Vista/listaPersonas.php">Volver</a>