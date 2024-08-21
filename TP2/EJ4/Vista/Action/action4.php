<?php
include_once "../../../EJ4/Utils/datasubmited.php";
include_once "../../Control/control4.php";


$datos = dataSubmitted();

$obj = new control();

$respuesta = $obj->Cinema($datos);

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
<br>
<a href="http://localhost/PWD/TP2/EJ4/Vista/ej4.php">Volver</a>
    
</body>
</html>