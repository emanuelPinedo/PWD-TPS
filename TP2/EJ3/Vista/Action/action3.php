<?php
include_once "../../../EJ3/Utils/datasubmited.php";
include_once "../../../EJ3/Control/control3.php";


$datos = dataSubmitted();

$obj = new control();

$respuesta = $obj->bienvenidaUser($datos);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BienvenidaUser</title>
</head>
<body>

<?php
echo $respuesta;
?>
<br><a href="http://localhost/PWD/TP2/EJ3/Vista/ej3.php">Volver</a>
</body>
</html>