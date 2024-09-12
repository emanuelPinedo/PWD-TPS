<?php
include_once ('../Vista/Estructura/header.php');
?>
<h1>Consigna</h1>
    <p>
    – Crear una pagina "buscarAuto.php" que contenga un formulario en donde se solicite el numero
de patente de un auto, estos datos deberán ser enviados a una pagina “accionBuscarAuto.php” en donde
usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con
la patente ingresada y mostrar los datos en una tabla. También deberán mostrar los carteles que crean
convenientes en caso de que no se encuentre ningún auto con la patente ingresada.
Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes
generada, no se puede acceder directamente a las clases del ORM.
    </p>

<h1>Buscar Auto</h1>
    <form action="../Vista/Action/actionBuscarAutos.php" method="get" id="form1">
        <label for="patente">Número de Patente:</label>
        <input type="text" id="patente" name="Patente">
        <input type="submit" value="Buscar">
    </form>
    <?php
include_once ('../Vista/Estructura/footer.php');
?>