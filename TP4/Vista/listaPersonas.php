<?php
$title = "Listado de Personas";
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
include_once "../config.php";
include_once('../Vista/Estructura/header.php');
/* "../Utils/funciones.php";
include_once "../Modelo/Persona.php";
include_once "../Control/ABMPersona.php";*/

$controlador = new ABMPersona();

// Obtener todas las personas
$personas = $controlador->buscar([]); // Obtener todas las personas
?>
<main class="pl-5 pr-5">
  <div class="d-flex mt-2">

    <h1 class="mr-3 mt-2 text-primary">Consigna</h1>
    <p class="ml-3 mt-2">– Crear una página 'listaPersonas.php' que muestre un listado con las personas que se
      encuentran cargadas y un link a otra página “autosPersona.php” que recibe un dni de una persona y muestra
      los datos de la persona y un listado de los autos que tiene asociados. Recordar usar la capa de control antes
      generada, no se puede acceder directamente a las clases del ORM.
    </p>
  </div>
  <h1 class="text-primary">Listado de Personas</h1>
  <table class="w-100 table table-hover text-center">
    <thead class="thead-dark">
      <tr>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Acción</th>
      </tr>
    </thead>
    <?php
    // Mostrar los datos de cada persona
    if ($personas) {
      foreach ($personas as $persona) {
        echo "<tbody>";
        echo "<tr>";
        echo "<td>" . htmlspecialchars($persona->getNroDni()) . "</td>";
        echo "<td>" . htmlspecialchars($persona->getNombre()) . "</td>";
        echo "<td>" . htmlspecialchars($persona->getApellido()) . "</td>";
        echo "<td><a href='../Vista/Action/autosPersona.php?dni=" . urlencode($persona->getNroDni()) . "'>Ver Autos</a></td>";
        echo "</tr>";
        echo "</tbody>";
      }
    } else {
      echo "<tr><td colspan='4'>No se encontraron personas.</td></tr>";
    }
    ?>
  </table>
</main>
<?php
include_once('../Vista/Estructura/footer.php');
?>