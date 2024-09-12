<?php
include_once ('../Vista/Estructura/header.php');
//este tp fue hecho con 3 acompañantes llamados 3 latas de speed
?>
<h1>Consigna</h1>
<p>
– Crear una página “NuevaPersona.php” que contenga un formulario que permita solicitar todos
los datos de una persona. Estos datos serán enviados a una página “accionNuevaPersona.php” que cargue
un nuevo registro en la tabla persona de la base de datos. Se debe mostrar un mensaje que indique si se
pudo o no cargar los datos de la persona. Utilizar css y validaciones javaScript cuando crea conveniente.
Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.
</p>

<h1>Registrar Nueva Persona</h1>
    <form action="../Vista/Action/actionNuevaPersona.php" method="post">
        <div id="error" class="error"></div>
        <label for="NroDni">DNI:</label>
        <input type="number" id="NroDni" name="NroDni">

        <label for="Apellido">Apellido:</label>
        <input type="text" id="Apellido" name="Apellido">

        <label for="Nombre">Nombre:</label>
        <input type="text" id="Nombre" name="Nombre">

        <label for="fechaNac">Fecha de Nacimiento:</label>
        <input type="date" id="fechaNac" name="fechaNac">

        <label for="Telefono">Teléfono:</label>
        <input type="tel" id="Telefono" name="Telefono">

        <label for="Domicilio">Domicilio:</label>
        <input type="text" id="Domicilio" name="Domicilio">

        <input type="submit" value="Registrar">
    </form>
<?php
include_once ('../Vista/Estructura/footer.php');
?>