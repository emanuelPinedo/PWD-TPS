<?php
$title = "Cambio de Dueño";
$jsFileFooter = "./Assets/validacion.js";
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
<main class="pl-5 pr-5">
  <div class="d-flex mt-2">

    <h1 class="mr-3 mt-2 text-primary">Consigna</h1>

    <p class="ml-3 mt-2">
      – Crear una página “CambioDuenio.php” que contenga un formulario en donde se solicite el
      numero de patente de un auto y un numero de documento de una persona, estos datos deberán ser enviados
      a una página “accionCambioDuenio.php” en donde se realice cambio del dueño del auto de la patente
      ingresada en el formulario. Mostrar mensajes de error en caso de que el auto o la persona no se encuentren
      cargados. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
      antes generada, no se puede acceder directamente a las clases del ORM.
    </p>
  </div>

  <div class="d-flex flex-column align-items-center justify-content-center">

    <h1 class="text-primary">Cambiar el Dueño del Auto (mal ahí)</h1>
    <form
      class="pl-5 pr-5 pt-4 pb-4 w-50 bg-light d-flex rounded flex-column align-items-center shadow"
      action="../Vista/Action/actionCambioDuenio.php"
      method="POST"
      novalidate
      onsubmit="return validarCambio()">
      <div>
        <label for="patente" class="form-label">Patente del auto:</label>
        <input type="text" class="form-control" id="patente" name="Patente" required>
        <div class="invalid-feedback">Introduzca una patente válida</div>

      </div>
      <div>
        <label for="dni" class="form-label">DNI del nuevo dueño:</label>
        <input type="text" class="form-control" id="dni" name="NroDni" required>
        <div class="invalid-feedback">Introduzca un DNI válido</div>

      </div>
      <input class="mt-5 btn btn-primary" type="submit" value="Cambiar Dueño">
    </form>
  </div>
</main>

<?php
include_once('../Vista/Estructura/footer.php');
?>