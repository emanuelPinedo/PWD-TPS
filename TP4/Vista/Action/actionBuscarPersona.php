<?php
include_once ('../../config.php');

$datos = data_submitted();
$dni = $datos['NroDni'];

$objABMPersona = new ABMPersona();
// Busca a la persona por el dni :v
$persona = $objABMPersona->buscar(['NroDni' => $dni]);

if (count($persona) > 0) {
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
            <input type="hidden" name="NroDni" value="<?php echo htmlspecialchars($persona['NroDni']); ?>">

            <label for="Apellido">Apellido:</label>
            <input type="text" id="Apellido" name="Apellido" value="<?php echo htmlspecialchars($persona['Apellido']); ?>">

            <label for="Nombre">Nombre: </label>
            <input type="text" name="Nombre" id="Nombre" value="<?php echo htmlspecialchars($persona['Nombre']); ?>">

            <label for="fechaNac">Fecha de Nacimiento:</label>
            <input type="text" id="fechaNac" name="fechaNac" value="<?php echo htmlspecialchars($persona['fechaNac']); ?>">

            <label for="Telefono">Teléfono:</label>
            <input type="text" id="Telefono" name="Telefono" value="<?php echo htmlspecialchars($persona['Telefono']); ?>">

            <label for="Domicilio">Domicilio:</label>
            <input type="text" id="Domicilio" name="Domicilio" value="<?php echo htmlspecialchars($persona['Domicilio']); ?>">

            <input type="submit" value="Actualizar">
            <br>
            <a href="http://localhost/PWD-TPS/TP4/Vista/BuscarPersona.php#">Volver</a>
        </form>
    </body>
    </html>
    <?php
} else {
    echo "<p>No hay una persona con este DNI, o no ha sido encontrada.</p>";
}
?>