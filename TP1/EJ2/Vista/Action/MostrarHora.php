<?php
    include_once ('../../Control/horasCursadas.php');
    include_once ('../../Utils/datasubmited.php');

    $datos = dataSubmitted();//obtengo los datos del get
    $obj = new HorasCursada();
    $totalHoras = $obj->calcularTotalHoras($datos);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total de Horas por Semana</title>
</head>
<body>
    <h1>Total de Horas Cursadas por semana</h1>
    <p><?php echo "El total de horas por semana es: " . $totalHoras; ?></p>
    <a href="http://localhost/PWD/TP1/EJ2/Vista/ej2.php">Volver</a>
</body>
</html>