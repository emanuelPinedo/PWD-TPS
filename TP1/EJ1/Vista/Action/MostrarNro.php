<?php

include_once ("../../Control/vernros.php");
include_once ("../../Utils/datasubmited.php");

$datos = dataSubmitted();

$obj = new Numero();

$mensaje = $obj->vernro($datos);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver número</title>
    <link rel="stylesheet" href="../../../style.css">
</head>
<body>
    <h1>Ver número ingresado</h1>
    <p><?php echo "El número ingresado es " . $mensaje; ?></p>
    <a href="http://localhost/EntregaTP123_DWD/PWD-TPS/TP1/EJ1/Vista/ej1.php">Volver atras</a>
</body>
</html>