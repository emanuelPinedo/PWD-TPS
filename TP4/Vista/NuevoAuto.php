<?php
include_once ('../../estructura/header.php');
?>
<h1>Registrar Nuevo Auto</h1>
    <form action="../Vista/Action/actionNuevoAuto.php" method="post" onsubmit="return validarFormulario()">
        <label for="patente">Patente:</label>
        <input type="text" id="patente" name="Patente">

        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="Marca">

        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="Modelo">

        <label for="dni">DNI del Dueño:</label>
        <input type="text" id="dni" name="DniDuenio">

        <input type="submit" value="Registrar">
    </form>
<?php
include_once ('../../estructura/footer.php');
?>