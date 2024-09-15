<?php
$title = "Buscar Persona";
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
      – Crear una página “BuscarPersona.html” que contenga un formulario que permita cargar un
      numero de documento de una persona. Estos datos serán enviados a una página “accionBuscarPersona.php”
      busque los datos de la persona cuyo documento sea el ingresado en el formulario los muestre en un nuevo
      formulario; a su vez este nuevo formulario deberá permitir modificar los datos mostrados (excepto el nro de
      documento) y estos serán enviados a otra página “ActualizarDatosPersona.php” que actualiza los datos de la
      persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
      antes generada, no se puede acceder directamente a las clases del ORM.
    </p>

  </div>

  <h1 class="text-primary">Buscar Persona</h1>
  <form
    class="w-100 d-flex flex-column align-items-center justify-content-center"
    action="../Vista/Action/actionBuscarPersona.php"
    method="get"
    id="form1"
    novalidate
    onsubmit="return validarBusquedaPersona()">
    <div>
      <label for="NroDni" class="form-label">Nro de Dni:</label>
      <input class="form-control" type="text" id="NroDni" name="NroDni" required>
      <div class="invalid-feedback">Introduzca un DNI válido</div>

    </div>
    <input class="mt-2 btn btn-primary" type="submit" value="Buscar">
  </form>

</main>
<?php
include_once('../Vista/Estructura/footer.php');
?>