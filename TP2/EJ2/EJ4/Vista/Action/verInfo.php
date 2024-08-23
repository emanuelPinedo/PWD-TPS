<?php
include_once ('../../Control/datos.php');
include_once ('../../../EJ4/Utils/datasubmited.php');

$datos = dataSubmitted();
$proceso = new Datos();
$msj = $proceso->mandarMensaje($datos);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informaci&oacute;n</title>
    <style>
        p{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: large;
        }
    </style>
</head>
<body>
    <p><?php echo $msj; ?></p>
    <a href="http://localhost/PWD-TPS/TP2/EJ2/EJ4/Vista/ej4.php">Volver</a>
</body>
</html>