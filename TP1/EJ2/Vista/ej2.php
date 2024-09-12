<?php
$title = "Ejercicio 2";
$cssFile = "";
$tp1ej1 = "../../EJ1/Vista/ej1.php";
$tp1ej2 = "#";
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
$tp4 = "../../../TP4/Vista/VerAutos.php";
include "../../../estructura/header.php" ?>
<main>
  <h2>Ingresar Horas de Cursada - Programaci&oacute;n Web Din&aacute;mica</h2>
  <form id="form2" action="./Action/MostrarHora.php" method="get">
    <label for="lunes">Lunes: </label>
    <input type="number" id="lunes" name="lunes" required><br><br>

    <label for="martes">Martes: </label>
    <input type="number" id="martes" name="martes" required><br><br>

    <label for="miercoles">Miércoles: </label>
    <input type="number" id="miercoles" name="miercoles" required><br><br>

    <label for="jueves">Jueves: </label>
    <input type="number" id="jueves" name="jueves" required><br><br>

    <label for="viernes">Viernes: </label>
    <input type="number" id="viernes" name="viernes" required><br><br>

    <input type="submit" value="Calcular Total de Horas">
  </form>
</main>
<?php include "../../../estructura/footer.php" ?>