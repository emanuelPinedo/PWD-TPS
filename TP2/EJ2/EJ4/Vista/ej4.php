<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets//CSS//styles.css">
    <title>Formulario Informaci&oacute;n</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="../Vista/Assets/libreria.js"></script>
</head>
<body>
    <form action="./Action//verInfo.php" method="get" id="form4">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>

        <label for="apelldio">Apellido: </label>
        <input type="text" id="apelldio" name="apellido"><br><br>

        <label for="edad">Edad: </label>
        <input type="number" id="edad" name="edad"><br><br>

        <label for="direccion">Direcci&oacute;n: </label>
        <input type="text" id="direccion" name="direccion"><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>