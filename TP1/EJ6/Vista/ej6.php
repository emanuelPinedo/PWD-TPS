<?php
$title = "Ejercicio 6";
$cssFile = "";
$tp1ej1 = "../../EJ1/Vista/ej1.php";
$tp1ej2 = "../../EJ2/Vista/ej2.php";
$tp1ej3 = "../../EJ3/Vista/ej3.php";
$tp1ej4 = "../../EJ4/Vista/ej4.php";
$tp1ej5 = "../../EJ5/Vista/ej5.php";
$tp1ej6 = "#";
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


  <form action="./Action//action6.php" method="post" id="form6">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" required>
    <br><br>

    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" id="apellido" required>
    <br><br>

    <label for="edad">Edad</label>
    <input type="number" name="edad" id="edad" required>
    <br><br>

    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" id="direccion" required>
    <br><br>

    <label for="sinestudios">No estudio</label>
    <input type="radio" name="estudios" id="sinestudios" value="0" required>
    <label for="conestudios">Primario</label>
    <input type="radio" name="estudios" id="primario" value="1">
    <label for="secundario">Secundario</label>
    <input type="radio" name="estudios" id="secundario" value="2">
    <br><br>
    <label for="mujer">Mujer</label>
    <input type="radio" name="sexo" id="mujer" value="mujer">
    <label for="hombre">Hombre</label>
    <input type="radio" name="sexo" id="hombre" value="hombre" required>

    <br><br>
    <label for="tennis">Tennis</label>
    <input type="checkbox" name="deporte[]" id="tennis">
    <label for="futbol">Futbol</label>
    <input type="checkbox" name="deporte[]" id="futbol">
    <label for="basquet">Basquet</label>
    <input type="checkbox" name="deporte[]" id="basquet">
    <label for="voley">Voley</label>
    <input type="checkbox" name="deporte[]" id="voley">
    <br><br>

    <input type="submit" name="enviar" id="enviar">

  </form>




</main>
<?php include "../../../estructura/footer.php" ?>