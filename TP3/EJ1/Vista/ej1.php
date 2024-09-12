<?php
$title = "Ejercicio 1";
// $jsFile = "./Assets/libreria.js";
// $cssFile = "./Assets/CSS/styles.css";
$tp1ej1 = "../../../TP1/EJ1/Vista/ej1.php";
$tp1ej2 = "../../../TP1/EJ2/Vista/ej2.php";
$tp1ej3 = "../../../TP1/EJ3/Vista/ej3.php";
$tp1ej4 = "../../../TP1/EJ4/Vista/ej4.php";
$tp1ej5 = "../../../TP1/EJ5/Vista/ej5.php";
$tp1ej6 = "../../../TP1/EJ6/Vista/ej6.php";
$tp1ej7 = "../../../TP1/EJ7/Vista/ej7.php";
$tp1ej8 = "../../../TP1/EJ8/Vista/ej8.php";
$tp2ej3 = "../../../TP2/EJ3/views/formulario.php";
$tp2ej4 = "../../../TP2/EJ4/Vista/ej4.php";
$tp3ej1 = "#";
$tp3ej2 = "../../EJ2/Vista/ej2.php";
$tp3ej3 = "../../EJ3/Vista/ej3.php";
$tp4 = "../../../TP4/Vista/VerAutos.php";
include "../../../estructura/header.php" ?>

<main class="text-light bg-dark d-flex align-items-center justify-content-center flex-column mt-5">
  <h2>Subir Archivo</h2>
  <form action="./Action//action1.php" method="post" enctype="multipart/form-data">
    <label for="miArchivo">Elige un archivo (.doc o .pdf, máximo 2MB):</label><br><br>
    <input type="file" class="border rounded border-secondary p-1" name="miArchivo" id="miArchivo"><br><br>
    <input type="submit" class="bg-info w-100 border rounded border-secondary" value="Subir Archivo">
  </form>
</main>

<?php include "../../../estructura/footer.php" ?>