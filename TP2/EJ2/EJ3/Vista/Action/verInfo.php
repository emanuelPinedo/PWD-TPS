<?php
include_once('../../Control/datos.php');
include_once('../../../EJ3/Utils/datasubmited.php');

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
  <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
  <p><?php echo $msj; ?></p>
  <a href="http://localhost/PWD-TPS/TP2/EJ2/EJ3/Vista/ej3.php">Volver</a>
</body>

</html>