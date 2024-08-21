<?php
include_once "../../Control/control2.php";
include_once "../../Utils/datasubmited.php";


$datos = dataSubmitted();

$archivo = new Archivo(); 
$respuesta = $archivo->subirArchivo($datos);


if ($respuesta == 0){
    $textoAMostrar = "<p>ERROR: no se pudo cargar el archivo </p>";
} 
elseif ($respuesta == 1){
    $textoAMostrar = "<textarea rows='10' cols='50'>".file_get_contents($archivo->getDir() . $datos['miArchivo']['name'])."</textarea>";
}
elseif($respuesta == -2){
    $textoAMostrar = "<p>ERROR: no se pudo cargar el archivo. No es un archivo txt</p>";
}
 else {
    $textoAMostrar = "<p>ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal</p>";
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
    <div><h1><?php echo $textoAMostrar; ?></h1></div>
    <a href="http://localhost/PWD/TP3/EJ2/Vista/ej2.php">Volver</a>
</body>
</html>