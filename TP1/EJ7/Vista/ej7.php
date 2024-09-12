<?php
$title = "Ejercicio 7";
$cssFile = "";
$tp1ej1 = "../../EJ1/Vista/ej1.php";
$tp1ej2 = "../../EJ2/Vista/ej2.php";
$tp1ej3 = "../../EJ3/Vista/ej3.php";
$tp1ej4 = "../../EJ4/Vista/ej4.php";
$tp1ej5 = "../../EJ5/Vista/ej5.php";
$tp1ej6 = "../../EJ6/Vista/ej6.php";
$tp1ej7 = "#";
$tp1ej8 = "../../EJ8/Vista/ej8.php";
$tp2ej3 = "../../../TP2/EJ3/views/formulario.php";
$tp2ej4 = "../../../TP2/EJ4/Vista/ej4.php";
$tp3ej1 = "../../../TP3/EJ1/Vista/ej1.php";
$tp3ej2 = "../../../TP3/EJ2/Vista/ej2.php";
$tp3ej3 = "../../../TP3/EJ3/Vista/ej3.php";
include "../../../estructura/header.php" ?>
<main>


  <h3>Crear una página con un formulario que contenga dos input de tipo text y un select. En
    los inputs se ingresarán números y el select debe dar la opción de una operación
    matemática que podrá resolverse usando los números ingresados. En la página que
    procesa la información se debe mostrar por pantalla la operación seleccionada, cada
    uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
    formulario:</h3>

  <form action="./Action//action7.php" method="post" id="form7">
    <label for="num1">N1</label>
    <input type="text" id="num1" name="numero1" required>
    <br><br>
    <label for="num2">N2</label>
    <input type="text" id="num2" name="numero2" required>
    <br>

    <br>
    <select name="operacion" id="form">
      <option value="sumar" name="sumar">sumar</option>
      <option value="multiplicar" name="multiplicar">multiplicar</option>
      <option value="restar" name="restar">restar</option>
    </select>

    <input type="submit" name="enviar" id="enviar">

  </form>




</main>

<?php include "../../../estructura/footer.php" ?>