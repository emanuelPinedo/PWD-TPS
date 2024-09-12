<?php
include_once ('../Vista/Estructura/header.php');
/* "../Utils/funciones.php";
include_once "../Modelo/Persona.php";
include_once "../Control/ABMPersona.php";*/
include_once "../config.php";

$controlador = new ABMPersona();

// Obtener todas las personas
$personas = $controlador->buscar([]); // Obtener todas las personas
echo "<h1>Consigna</h1>";
echo "<p>– Crear una página 'listaPersonas.php' que muestre un listado con las personas que se
encuentran cargadas y un link a otra página “autosPersona.php” que recibe un dni de una persona y muestra
los datos de la persona y un listado de los autos que tiene asociados. Recordar usar la capa de control antes
generada, no se puede acceder directamente a las clases del ORM. <p>";

echo "<h1>Listado de Personas</h1>";
echo "<table border='1'>";
echo "<tr><th>DNI</th><th>Nombre</th><th>Apellido</th><th>Acción</th></tr>";

// Mostrar los datos de cada persona
if ($personas) {
    foreach ($personas as $persona) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($persona->getNroDni()) . "</td>";
        echo "<td>" . htmlspecialchars($persona->getNombre()) . "</td>";
        echo "<td>" . htmlspecialchars($persona->getApellido()) . "</td>";
        echo "<td><a href='../Vista/Action/autosPersona.php?dni=" . urlencode($persona->getNroDni()) . "'>Ver Autos</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No se encontraron personas.</td></tr>";
}

echo "</table>";
include_once ('../Vista/Estructura/footer.php');
?>