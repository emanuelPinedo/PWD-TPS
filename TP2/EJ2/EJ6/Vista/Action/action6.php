<?php
include_once "../../Control/control6.php";
include_once "../../../EJ6/Utils/datasubmited.php";


$datos = dataSubmitted();

$obj = new control();

$respuesta = $obj->infoPersona($datos);
$deportes = $obj->cantDeportes($datos);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quien Sos</title>
</head>
<body>

<?php
echo $respuesta;
echo "<br>\nLa cantidad de deportes elegidos es de: $deportes ";
?>
<br>
<a href="http://localhost/PWD/TP1/EJ6/Vista/ej6.php">Volver</a>

    
</body>
</html>