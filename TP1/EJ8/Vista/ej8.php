<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Cliente</title>
    
</head>
<body>
<form action="./Action//action8.php" method="post" id = "form8">

    <label for="edad">Edad:</label>
    <input type="text" name="edad" id="edad" required>
    <br>
    <label for="estudio">Estudio</label>
    <input type="radio" name="estudios" value="estudio" id="estudio" required>
    <br>
    <label for="noestudio">No estudio</label>
    <input type="radio" name="estudios" value="noestudio" id="noestudio" required>
    <br>
    <input type="submit" name="enviar" id="enviar">

</form>
</body>
</html>