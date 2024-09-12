<?php
$title = "Ver Autos";
// $jsFile = "";
// $cssFile = "";
$tp1ej1 = "../../TP1/EJ1/Vista/ej1.php";
$tp1ej2 = "../../TP1/EJ2/Vista/ej2.php";
$tp1ej3 = "../../TP1/EJ3/Vista/ej3.php";
$tp1ej4 = "../../TP1/EJ4/Vista/ej4.php";
$tp1ej5 = "../../TP1/EJ5/Vista/ej5.php";
$tp1ej6 = "../../TP1/EJ6/Vista/ej6.php";
$tp1ej7 = "../../TP1/EJ7/Vista/ej7.php";
$tp1ej8 = "../../TP1/EJ8/Vista/ej8.php";
$tp2ej3 = "../../TP2/EJ3/views/formulario.php";
$tp2ej4 = "../../TP2/EJ4/Vista/ej4.php";
$tp3ej1 = "../../TP3/EJ1/Vista/ej1.php";
$tp3ej2 = "../../TP3/EJ2/Vista/ej2.php";
$tp3ej3 = "../../TP3/EJ3/Vista/ej3.php";
include_once('../config.php');
include_once('../Vista/Estructura/header.php');
/*include_once('../Modelo/Auto.php');
include_once('../Control/ABMAuto.php');
include_once('../Modelo/Persona.php');¨*/

// Crear una instancia del controlador ABMAuto
$abmAuto = new ABMAuto();

// Buscar todos los autos
$autos = $abmAuto->buscar(null);
?>
<main class="pl-5 pr-5">
  <div class="d-flex">
    <h1 class="mr-3 mt-2 text-primary">Consigna</h1>
    <p class="ml-3 mt-2">
      –Crear una página php “VerAutos.php”, en ella usando la capa de control correspondiente
      mostrar todos los datos de los autos que se encuentran cargados, de los dueños mostrar nombre y apellido.
      En caso de que no se encuentre ningún auto cargado en la base mostrar un mensaje indicando que no hay
      autos cargados.
    </p>
  </div>

  <table class="w-100 table table-hover text-center">
    <h1 class="text-primary">Lista de Autos</h1>
    <?php
    if (count($autos) > 0) {
      echo '
      <thead class="thead-dark">
        <tr>
          <th>Patente</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Nombre del Dueño</th>
          <th>Apellido</th>
          <th>DNI</th>
        </tr>
      </thead>
      <tbody>';
      foreach ($autos as $auto) {
        $persona = $auto['DniDuenio']; // Cambiar esto a un array
        echo '<tr>';
        echo '<td>' . htmlspecialchars($auto['Patente']) . '</td>';
        echo '<td>' . htmlspecialchars($auto['Marca']) . '</td>';
        echo '<td>' . htmlspecialchars($auto['Modelo']) . '</td>';
        echo '<td>' . htmlspecialchars($persona['Nombre']) . '</td>';
        echo '<td>' . htmlspecialchars($persona['Apellido']) . '</td>';
        echo '<td>' . htmlspecialchars($persona['NroDni']) . '</td>';
        echo '</tr>';
      }
      echo '</tbody>';
    } else {
      echo '<h3> No se encontraron registros </h3>';
    }
    ?>
  </table>
</main>

<?php
include_once('../Vista/Estructura/footer.php');
?>