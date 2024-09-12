<?php
include_once ('../Vista/Estructura/header.php');
?>
<h1>Consigna</h1>
<p>
– Crear una página “CambioDuenio.php” que contenga un formulario en donde se solicite el
numero de patente de un auto y un numero de documento de una persona, estos datos deberán ser enviados
a una página “accionCambioDuenio.php” en donde se realice cambio del dueño del auto de la patente
ingresada en el formulario. Mostrar mensajes de error en caso de que el auto o la persona no se encuentren
cargados. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
antes generada, no se puede acceder directamente a las clases del ORM.
</p>

<h1>Cambiar el Dueño del Auto (mal ahí)</h1>
    <form action="../Vista/Action/actionCambioDuenio.php" method="POST">
        <label for="patente">Patente del auto:</label>
        <input type="text" id="patente" name="Patente" required>
        <br><br>
        <label for="dni">DNI del nuevo dueño:</label>
        <input type="text" id="dni" name="NroDni" required>
        <br><br>
        <input type="submit" value="Cambiar Dueño">
    </form>
<?php
include_once ('../Vista/Estructura/footer.php');
?>