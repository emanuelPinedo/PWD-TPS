<?php
include_once "../../../EJ7/Utils/datasubmited.php";
include_once "../../Control/control7.php";


$datos = dataSubmitted();

$obj = new control();

$respuesta = $obj->operacion($datos);

$operacion= $datos['operacion'];
$num1 = $datos['numero1'];
$num2 = $datos['numero2'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Res Operacion</title>
</head>
<body>

<?php
echo "El resultado de la operacion: $operacion con los numeros $num1 y $num2: es  $respuesta";
?>
<br>
<a href="http://localhost/PWD/TP1/EJ7/Vista/ej7.php">Volver</a>
    
</body>
</html>