<?php
$title = "Buscar Persona";
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
include_once('../Vista/Estructura/header.php');
?>
<h1>Consigna</h1>
<p>
  – Crear una página “BuscarPersona.html” que contenga un formulario que permita cargar un
  numero de documento de una persona. Estos datos serán enviados a una página “accionBuscarPersona.php”
  busque los datos de la persona cuyo documento sea el ingresado en el formulario los muestre en un nuevo
  formulario; a su vez este nuevo formulario deberá permitir modificar los datos mostrados (excepto el nro de
  documento) y estos serán enviados a otra página “ActualizarDatosPersona.php” que actualiza los datos de la
  persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
  antes generada, no se puede acceder directamente a las clases del ORM.
</p>

<h1>Buscar Persona</h1>
<form action="../Vista/Action/actionBuscarPersona.php" method="get" id="form1">
  <label for="NroDni">Nro de Dni:</label>
  <input type="text" id="NroDni" name="NroDni">
  <input type="submit" value="Buscar">
</form>
<?php
include_once('../Vista/Estructura/footer.php');
?>