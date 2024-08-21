<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivo</title>
</head>
<body>
    <h2>Subir Archivo</h2>
    <form action="./Action//action2.php" method="post" enctype="multipart/form-data">
        <label for="miArchivo">Elige un archivo (.txt):</label><br><br>
        <input type="file" name="miArchivo" id="miArchivo"><br><br>
        <input type="submit" value="Subir Archivo">
    </form>
</body>
</html>