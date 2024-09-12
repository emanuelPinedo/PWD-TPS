<?php
$title = "Ejercicio 4";
$jsFile = "./js/validacion.js";
$jsFileFooter = "./js/validacion.js";
$cssFile = "./css/styles.css";
$tp1ej1 = "../../../TP1/EJ1/Vista/ej1.php";
$tp1ej2 = "../../../TP1/EJ2/Vista/ej2.php";
$tp1ej3 = "../../../TP1/EJ3/Vista/ej3.php";
$tp1ej4 = "../../../TP1/EJ4/Vista/ej4.php";
$tp1ej5 = "../../../TP1/EJ5/Vista/ej5.php";
$tp1ej6 = "../../../TP1/EJ6/Vista/ej6.php";
$tp1ej7 = "../../../TP1/EJ7/Vista/ej7.php";
$tp1ej8 = "../../../TP1/EJ8/Vista/ej8.php";
$tp2ej3 = "#";
$tp2ej4 = "../../EJ4/Vista/ej4.php";
$tp3ej1 = "../../../TP3/EJ1/Vista/ej1.php";
$tp3ej2 = "../../../TP3/EJ2/Vista/ej2.php";
$tp3ej3 = "../../../TP3/EJ3/Vista/ej3.php";
$tp4 = "../../../TP4/Vista/VerAutos.php";
include "../../../estructura/header.php" ?>

<main class="bg-dark">
  <div class="border border-secondary shadow-lg rounded login-container p-5 d-flex justify-content-center flex-column align-items-center bg-light">
    <h2 class="mb-4">Member Login</h2>
    <form id="loginForm" action="./action/action.php" method="POST">
      <input type="hidden" name="action" value="verificar">
      <div class="mb-3 input-group">
        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Username" required>
      </div>
      <div class="mb-3 input-group">
        <input type="password" class="form-control" id="clave" name="clave" placeholder="Password" required>
      </div>
      <input type="submit" class="bg-success text-light btn btn-login w-100" value="Login" />
    </form>
  </div>

</main>
<?php include "../../../estructura/footer.php" ?>