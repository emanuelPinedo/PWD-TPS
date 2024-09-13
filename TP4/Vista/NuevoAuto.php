<?php
$title = "Nuevo Auto ";
$jsFileFooter = "./Assets/libreria.js";
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
      – Crear una página “NuevoAuto.php” que contenga un formulario en el que se permita cargar
      todos los datos de un auto (incluso su dueño). Estos datos serán enviados a una página
      “accionNuevoAuto.php” que cargue un nuevo registro en la tabla auto de la base de datos. Se debe chequear
      antes que la persona dueña del auto ya se encuentre cargada en la base de datos, de no ser así mostrar un
      link a la página que permite carga una nueva persona. Se debe mostrar un mensaje que indique si se pudo o
      no cargar los datos Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de
      control antes generada, no se puede acceder directamente a las clases del ORM.
    </p>
  </div>
  <div class="d-flex flex-column align-items-center justify-content-center mb-5">
    <h1>Registrar Nuevo Auto</h1>
    <form class="w-25 bg-light shadow p-3 needs-validation" novalidate action="../Vista/Action/actionNuevoAuto.php" method="post" onsubmit="return validarFormulario()">
      <div class="w-100 d-flex flex-column">
        <label for="patente" class="form-label">Patente:</label>
        <input type="text" class="form-control" id="patente" name="Patente" required>
        <div class="invalid-feedback">Este campo es necesario</div>
      </div>
      <div class="w-100 d-flex flex-column">
        <label for="marca" class="form-label">Marca:</label>
        <input type="text" class="form-control" id="marca" name="Marca" required>
        <div class="invalid-feedback">Este campo es necesario</div>
      </div>
      <div class="w-100 d-flex flex-column">
        <label for="modelo" class="form-label">Modelo:</label>
        <input type="text" class="form-control" id="modelo" name="Modelo" required>
        <div class="invalid-feedback">Este campo es necesario</div>
      </div>
      <div class="w-100 d-flex flex-column">
        <label for="dni" class="form-label">DNI del Dueño:</label>
        <input type="text" class="form-control" id="dni" name="DniDuenio" required>
        <div class="invalid-feedback">Este campo es necesario</div>
      </div>
      <input class="w-100 btn btn-primary mt-3" type="submit" value="Registrar">
    </form>
  </div>
</main>
<?php
include_once('../Vista/Estructura/footer.php');
?>