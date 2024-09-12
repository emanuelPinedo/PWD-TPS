<?php
$title = "Ejercicio 1";
$tp1ej1 = "#";
$tp1ej2 = "../../EJ2/Vista/ej2.php";
$tp1ej3 = "../../EJ3/Vista/ej3.php";
$tp1ej4 = "../../EJ4/Vista/ej4.php";
$tp1ej5 = "../../EJ5/Vista/ej5.php";
$tp1ej6 = "../../EJ6/Vista/ej6.php";
$tp1ej7 = "../../EJ7/Vista/ej7.php";
$tp1ej8 = "../../EJ8/Vista/ej8.php";
$tp2ej3 = "../../../TP2/EJ3/views/formulario.php";
$tp2ej4 = "../../../TP2/EJ4/Vista/ej4.php";
$tp3ej1 = "../../../TP3/EJ1/Vista/ej1.php";
$tp3ej2 = "../../../TP3/EJ2/Vista/ej2.php";
$tp3ej3 = "../../../TP3/EJ3/Vista/ej3.php";
include "../../../estructura/header.php" ?>
<main>

  <form id="form1" action="./Action//MostrarNro.php" method="post">
    <label for="number">Ingrese un n&uacute;mero:</label>
    <br>
    <input type="number" id="number" name="numero" required>
    <br>
    <input type="submit" name="enviar" value="Enviar">
  </form>
</main>

<?php include "../../../estructura/footer.php" ?>