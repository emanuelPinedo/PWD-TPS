<?php
include_once "../../Control/control5.php";
include_once "../../../EJ5/Utils/datasubmited.php";


$datos = dataSubmitted();

$obj = new control();

$respuesta = $obj->decirquiensos($datos);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
echo $respuesta;
?>
<br><br>
<a href="http://localhost/PWD-TPS/TP1/EJ5/Vista/ej5.php">Volver</a>

    
</body>
</html>