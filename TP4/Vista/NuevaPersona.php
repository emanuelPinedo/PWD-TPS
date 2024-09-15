<?php
$title = "Nueva Persona";
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
//este tp fue hecho con 3 acompañantes llamados 3 latas de speed
?>
<main class="pl-5 pr-5">
  <div class="d-flex mt-2">

    <h1 class="mr-3 mt-2 text-primary">Consigna</h1>

    <p class="ml-3 mt-2">
      – Crear una página “NuevaPersona.php” que contenga un formulario que permita solicitar todos
      los datos de una persona. Estos datos serán enviados a una página “accionNuevaPersona.php” que cargue
      un nuevo registro en la tabla persona de la base de datos. Se debe mostrar un mensaje que indique si se
      pudo o no cargar los datos de la persona. Utilizar css y validaciones javaScript cuando crea conveniente.
      Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.
    </p>
  </div>
  <div class="d-flex flex-column align-items-center justify-content-center mb-5">

    <h1 class="text-primary">Registrar Nueva Persona</h1>
    <form
      class="w-25 bg-light shadow p-3"
      novalidate
      action="../Vista/Action/actionNuevaPersona.php"
      method="post"
      onsubmit="return validarPersona()">
      <div class="w-100 d-flex flex-column">
        <label for="NroDni" class="form-label">DNI:</label>
        <input type="number" class="form-control" id="NroDni" name="NroDni" required>
        <div class="invalid-feedback">Introduzca un DNI válido</div>
      </div>
      <div class="w-100 d-flex flex-column">
        <label for="Apellido" class="form-label">Apellido:</label>
        <input type="text" class="form-control" id="Apellido" name="Apellido" required>
        <div class="invalid-feedback">Introduzca un Apellido válido</div>
      </div>
      <div class="w-100 d-flex flex-column">
        <label for="Nombre" class="form-label">Nombre:</label>
        <input type="text" class="form-control" id="Nombre" name="Nombre" required>
        <div class="invalid-feedback">Introduzca un Nombre válido</div>
      </div>
      <div class="w-100 d-flex flex-column">
        <label for="fechaNac" class="form-label">Fecha de Nacimiento:</label>
        <input type="date" class="form-control" id="fechaNac" name="fechaNac" required>
        <div class="invalid-feedback">Introduzca una fecha válida</div>
      </div>
      <div class="w-100 d-flex flex-column">
        <label for="Telefono" class="form-label">Teléfono:</label>
        <input type="tel" class="form-control" id="Telefono" name="Telefono" required>
        <div class="invalid-feedback">Introduzca un Nro de teléfono válido</div>
      </div>
      <div class="w-100 d-flex flex-column">
        <label for="Domicilio" class="form-label">Domicilio:</label>
        <input type="text" class="form-control" id="Domicilio" name="Domicilio" required>
        <div class="invalid-feedback">Introduzca un Domicilio válido</div>
      </div>

      <input class="w-100 btn btn-primary mt-3" type="submit" value="Registrar">
    </form>
  </div>
</main>
<?php
include_once('../Vista/Estructura/footer.php');
?>