<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets//CSS//styles.css">
    <title>Formulario Informaci&oacute;n</title>
    
</head>
<body>
    <form action="./Action//verInfo.php" method="get" id="form4">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apelldio">Apellido: </label>
        <input type="text" id="apelldio" name="apellido" required><br><br>

        <label for="edad">Edad: </label>
        <input type="number" id="edad" name="edad" required><br><br>

        <label for="direccion">Direcci&oacute;n: </label>
        <input type="text" id="direccion" name="direccion" required><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>