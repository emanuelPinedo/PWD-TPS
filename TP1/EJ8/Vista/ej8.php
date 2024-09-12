<?php
$title = "Ejercicio 8";
$cssFile = "";
$tp1ej1 = "../../EJ1/Vista/ej1.php";
$tp1ej2 = "../../EJ2/Vista/ej2.php";
$tp1ej3 = "../../EJ3/Vista/ej3.php";
$tp1ej4 = "../../EJ4/Vista/ej4.php";
$tp1ej5 = "../../EJ5/Vista/ej5.php";
$tp1ej6 = "../../EJ6/Vista/ej6.php";
$tp1ej7 = "../../EJ7/Vista/ej7.php";
$tp1ej8 = "#";
$tp2ej3 = "../../../TP2/EJ3/views/formulario.php";
$tp2ej4 = "../../../TP2/EJ4/Vista/ej4.php";
$tp3ej1 = "../../../TP3/EJ1/Vista/ej1.php";
$tp3ej2 = "../../../TP3/EJ2/Vista/ej2.php";
$tp3ej3 = "../../../TP3/EJ3/Vista/ej3.php";
$tp4 = "../../../TP4/Vista/ejercicio.php";
include "../../../estructura/header.php" ?>
<main>
  <form action="./Action//action8.php" method="post" id="form8">

    <label for="edad">Edad:</label>
    <input type="number" name="edad" id="edad" required max="99">
    <br>
    <label for="estudio">Estudio</label>
    <input type="radio" name="estudios" value="estudio" id="estudio" required>
    <br>
    <label for="noestudio">No estudio</label>
    <input type="radio" name="estudios" value="noestudio" id="noestudio" required>
    <br>
    <input type="submit" name="enviar" id="enviar">
    <button type="reset">Limpiar</button>

  </form>
</main>
<?php include "../../../estructura/footer.php" ?>