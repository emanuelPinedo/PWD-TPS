<?php
$title = "Nueva Persona";
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
//este tp fue hecho con 3 acompañantes llamados 3 latas de speed
?>
<h1>Consigna</h1>
<p>
  – Crear una página “NuevaPersona.php” que contenga un formulario que permita solicitar todos
  los datos de una persona. Estos datos serán enviados a una página “accionNuevaPersona.php” que cargue
  un nuevo registro en la tabla persona de la base de datos. Se debe mostrar un mensaje que indique si se
  pudo o no cargar los datos de la persona. Utilizar css y validaciones javaScript cuando crea conveniente.
  Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.
</p>

<h1>Registrar Nueva Persona</h1>
<form action="../Vista/Action/actionNuevaPersona.php" method="post">
  <div id="error" class="error"></div>
  <label for="NroDni">DNI:</label>
  <input type="number" id="NroDni" name="NroDni">

  <label for="Apellido">Apellido:</label>
  <input type="text" id="Apellido" name="Apellido">

  <label for="Nombre">Nombre:</label>
  <input type="text" id="Nombre" name="Nombre">

  <label for="fechaNac">Fecha de Nacimiento:</label>
  <input type="date" id="fechaNac" name="fechaNac">

  <label for="Telefono">Teléfono:</label>
  <input type="tel" id="Telefono" name="Telefono">

  <label for="Domicilio">Domicilio:</label>
  <input type="text" id="Domicilio" name="Domicilio">

  <input type="submit" value="Registrar">
</form>
<?php
include_once('../Vista/Estructura/footer.php');
?>