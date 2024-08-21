<?php
include_once "../../Utils/datasubmited.php";
include_once "../../Control/control3.php";
include_once "../../Control/controlImg.php";

$datos = dataSubmitted();

$obj = new control();

$respuesta = $obj->Cinema($datos);

$objImg = new ControlImg();
$rta = $objImg->subirArchivo($_FILES);

if ($rta == 0) {
    $textoAMostrar = "<p>ERROR: no se pudo cargar el archivo </p>";
} elseif ($rta == 1) {
    $rutaArchivo = $objImg->getDir() . $datos['imagen']['name'];
    $textoAMostrar = "<img src='" . $rutaArchivo . "' alt='Imagen de la película'>";
} elseif ($rta == -2) {
    $textoAMostrar = "<p>ERROR: no se pudo cargar el archivo. No es una imagen</p>";
} else {
    $textoAMostrar = "<p>ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal</p>";
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelicula</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            max-width: 100%;
            background-size: cover;
            background-position: center;
            background-color: #f0f0f0;
        }

        div {
            background-color: #e0f0dc;
            width: 650px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #2b669a;
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            color: #4b8f29;
            margin-bottom: 10px;
            font-size: 18px;
        }

        strong {
            font-weight: bold;
        }

        a {

            margin-top: 20px;
            text-decoration: underline;
            color: #0066cc;
            font-size: 16px;
        }
    </style>
</head>
<body>
<div>
    <br><br>
    <h1>La película introducida es</h4>
    <br><br>
    <p><strong>Título:</strong> <?php echo $respuesta['titulo']; ?></p>
    <p><strong>Actores:</strong> <?php echo $respuesta['actores']; ?></p>
    <p><strong>Director:</strong> <?php echo $respuesta['director']; ?></p>
    <p><strong>Guion:</strong> <?php echo $respuesta['guion']; ?></p>
    <p><strong>Producción:</strong> <?php echo $respuesta['produccion']; ?></p>
    <p><strong>Año:</strong> <?php echo $respuesta['anio']; ?></p>
    <p><strong>Nacionalidad:</strong> <?php echo $respuesta['nacionalidad']; ?></p>
    <p><strong>Género:</strong> <?php echo $respuesta['genero']; ?></p>
    <p><strong>Duración:</strong> <?php echo $respuesta['duracion']; ?> minutos</p>
    <p><strong>Restricciones de edad:</strong> <?php echo $respuesta['restricciones']; ?></p>
    <p><strong>Sinopsis:</strong> <?php echo $respuesta['sinopsis']; ?></p>
    <?php echo $textoAMostrar; ?>
    <br>
    <a href="http://localhost/PWD/TP2/EJ4/Vista/ej4.php">Volver</a>
</div>
    
</body>
</html>