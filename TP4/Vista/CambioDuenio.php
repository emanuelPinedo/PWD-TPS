<?php
$title = "Cambio de Dueño";
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
  – Crear una página “CambioDuenio.php” que contenga un formulario en donde se solicite el
  numero de patente de un auto y un numero de documento de una persona, estos datos deberán ser enviados
  a una página “accionCambioDuenio.php” en donde se realice cambio del dueño del auto de la patente
  ingresada en el formulario. Mostrar mensajes de error en caso de que el auto o la persona no se encuentren
  cargados. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
  antes generada, no se puede acceder directamente a las clases del ORM.
</p>

<h1>Cambiar el Dueño del Auto (mal ahí)</h1>
<form action="../Vista/Action/actionCambioDuenio.php" method="POST">
  <label for="patente">Patente del auto:</label>
  <input type="text" id="patente" name="Patente" required>
  <br><br>
  <label for="dni">DNI del nuevo dueño:</label>
  <input type="text" id="dni" name="NroDni" required>
  <br><br>
  <input type="submit" value="Cambiar Dueño">
</form>
<?php
include_once('../Vista/Estructura/footer.php');
?>