<?php
$title = "Ejercicio 3";
$cssFile = "./Assets/CSS/styles.css";
$tp1ej1 = "../../EJ1/Vista/ej1.php";
$tp1ej2 = "../../EJ2/Vista/ej2.php";
$tp1ej3 = "#";
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
  <form action="./Action//verInfo.php" method="get" id="form3">
    <label for="nombre">Nombre: </label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="apelldio">Apellido: </label>
    <input type="text" id="apelldio" name="apellido" required><br><br>

    <label for="edad">Edad: </label>
    <input type="number" id="edad" name="edad" required><br><br>

    <label for="direccion">Direcci&oacute;n: </label>
    <input type="text" id="direccion" name="direccion" required><br><br>

    <input type="submit" value="Enviar">
  </form>

</main>
<?php include "../../../estructura/footer.php" ?>