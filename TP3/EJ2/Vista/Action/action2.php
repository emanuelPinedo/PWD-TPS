<?php
include_once "../../Control/control2.php";
include_once "../../Utils/datasubmited.php";


$datos = dataSubmitted();

$archivoSubir = new Archivo();
$rta = $archivoSubir->subirArchivo($datos);


if ($rta == 0) {
  $texto = "<p>ERROR: no se cargó el archivo </p>";
} elseif ($rta == 1) {
  $texto = "<textarea class='p-3 bg-secondary text-light' rows='10' cols='50'>" . file_get_contents($archivoSubir->getDir() . $datos['miArchivo']['name']) . "</textarea>";
} elseif ($rta == -1) {
  $texto = "<p class='text-danger border-bottom border-danger'>ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal</p>";
} else {
  $texto = "<p class='text-danger border-bottom border-danger'>ERROR: no se pudo cargar el archivo. Asegurese de que sea un archivo txt</p>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Archivo</title>
</head>

<body class="text-light bg-dark d-flex align-items-center justify-content-center flex-column mt-5">
  <div>
    <h1><?php echo $texto; ?></h1>
  </div>
  <a class="p-1 pl-3 pr-3 bg-light border rounded border-secondary" href="http://localhost/PWD-TPS/TP3/EJ2/Vista/ej2.php">Volver</a>
</body>

</html>