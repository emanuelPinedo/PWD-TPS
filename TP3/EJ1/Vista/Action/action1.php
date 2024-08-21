<?php
include_once "../../Utils/datasubmited.php";
include_once "../../Control/control1.php";


$datos = dataSubmitted();

$archivo = new Archivo(); 
$respuesta = $archivo->subirArchivo($datos);

if ($respuesta == 0){
    $textoAMostrar = "<p>ERROR: no se pudo cargar el archivo </p>";
} elseif ($respuesta == 1){
    $textoAMostrar = "<p>El archivo " . $datos['miArchivo']["name"] . " se ha copiado con Éxito </p>";
} elseif ($respuesta == -1) {
    $textoAMostrar = "<p>ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal</p>";
} else {
    $textoAMostrar = "<p>ERROR: El archivo no es válido. Asegúrese de que el archivo sea .doc o .pdf y no exceda los 2MB.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo</title>
</head>
<body> 
    <div ><h1><?php echo $textoAMostrar; ?></h1></div>
    <a href="http://localhost/PWD/TP3/EJ1/Vista/ej1.php">Volver</a>
</body>
</html>