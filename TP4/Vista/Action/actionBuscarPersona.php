<?php
include_once ('../../config.php');

$datos = data_submitted();
$dni = $datos['NroDni'];

$objABMPersona = new ABMPersona();
//busco a la persona x el dni :v
$persona = $objABMPersona->buscar(['NroDni' => $dni]);

if(count($persona) > 0){
    $persona = $persona[0];
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Datos persona</h1>
        <form action="ActualizarDatosPersona.php" method="post">
            <input type="hidden" name="NroDni" value="<?php echo $persona->getNroDni();?>">
        
            <label for="Apellido">Apellido:</label>
            <input type="text" id="Apellido" name="Apellido" value="<?php echo $persona->getApellido(); ?>">

            <label for="Nombre">Nombre: </label>
            <input type="text" name="Nombre" id="Nombre" value="<?php echo $persona->getNombre(); ?>">
            
            <label for="fechaNac">Fecha de Nacimiento:</label>
            <input type="text" id="fechaNac" name="fechaNac" value="<?php echo $persona->getfechaNac(); ?>">

            <label for="Telefono">Teléfono:</label>
            <input type="text" id="Telefono" name="Telefono" value="<?php echo $persona->getTelefono(); ?>">
            
            <label for="Domicilio">Domicilio:</label>
            <input type="text" id="Domicilio" name="Domicilio" value="<?php echo $persona->getDomicilio(); ?>">

            <input type="submit" value="Actualizar">
            <br>
            <a href="http://localhost/PWD-TPS/TP4/Vista/BuscarPersona.php#">Volver</a>
        </form>
    </body>
    </html>
    <?php
} else {
    echo "<p>No hay una persona con este DNI, o no ha sido encontrado xd.</p>";
}
?>