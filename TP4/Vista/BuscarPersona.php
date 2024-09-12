<?php
include_once ('../Vista/Estructura/header.php');
?>
<h1>Consigna</h1>
<p>
– Crear una página “BuscarPersona.html” que contenga un formulario que permita cargar un
numero de documento de una persona. Estos datos serán enviados a una página “accionBuscarPersona.php”
busque los datos de la persona cuyo documento sea el ingresado en el formulario los muestre en un nuevo
formulario; a su vez este nuevo formulario deberá permitir modificar los datos mostrados (excepto el nro de
documento) y estos serán enviados a otra página “ActualizarDatosPersona.php” que actualiza los datos de la
persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
antes generada, no se puede acceder directamente a las clases del ORM.
</p>

<h1>Buscar Persona</h1>
    <form action="../Vista/Action/actionBuscarPersona.php" method="get" id="form1">
        <label for="NroDni">Nro de Dni:</label>
        <input type="text" id="NroDni" name="NroDni">
        <input type="submit" value="Buscar">
    </form>
<?php
include_once ('../Vista/Estructura/footer.php');
?>