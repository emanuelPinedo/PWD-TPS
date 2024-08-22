<?php
include_once "../../../EJ8/Utils/datasubmited.php";
include_once "../../Control/control8.php";

$datos = dataSubmitted();

$obj = new control();

$respuesta = $obj->ej8($datos);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paga Cliente</title>
</head>
<body>

<?php
echo "El cliente va a pagar $respuesta";
?>
<br>
<a href="http://localhost/PWD-TPS/TP1/EJ8/Vista/ej8.php">Volver</a>

    
</body>
</html>