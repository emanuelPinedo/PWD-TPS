<?php
$title = "Buscar Auto";
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
  – Crear una pagina "buscarAuto.php" que contenga un formulario en donde se solicite el numero
  de patente de un auto, estos datos deberán ser enviados a una pagina “accionBuscarAuto.php” en donde
  usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con
  la patente ingresada y mostrar los datos en una tabla. También deberán mostrar los carteles que crean
  convenientes en caso de que no se encuentre ningún auto con la patente ingresada.
  Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes
  generada, no se puede acceder directamente a las clases del ORM.
</p>

<h1>Buscar Auto</h1>
<form action="../Vista/Action/actionBuscarAutos.php" method="get" id="form1">
  <label for="patente">Número de Patente:</label>
  <input type="text" id="patente" name="Patente">
  <input type="submit" value="Buscar">
</form>
<?php
include_once('../Vista/Estructura/footer.php');
?>