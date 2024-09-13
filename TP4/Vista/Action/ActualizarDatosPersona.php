<?php
include_once ('../../config.php');
include_once('../Estructura/header.php');
$datos = data_submitted();

$objABMPersona = new ABMPersona();

$param = [
    'NroDni' => $datos['NroDni'], // Recordando que el DNi no puede ser cabmiado.
    'Nombre' => $datos['Nombre'],
    'Apellido' => $datos['Apellido'],
    'Domicilio' => $datos['Domicilio'],
    'fechaNac' => $datos['fechaNac'],
    'Telefono' => $datos['Telefono']
];
echo "<h1>Datos de la persona Actualizados</h1>";
print_r($param);
if($objABMPersona->modificacion($param)){
    echo "<p>Los datos de la persona con el DNI {$datos['NroDni']} han sido actualizados!!!! NASHE GOD</p>";
} else {
    echo "<p>Error, los datos de esta persona np se pueden actualizar.</p>";
}
?>
<a href="http://localhost/PWD-TPS/TP4/Vista/Action/actionBuscarPersona.php?NroDni=45798194">Volver a la Actualizaci&oacute;n</a>
<br>
<a href="http://localhost/PWD-TPS/TP4/Vista/BuscarPersona.php#">Volver al Ejercicio</a>
<?php include_once("../Estructura/footer.php"); ?>