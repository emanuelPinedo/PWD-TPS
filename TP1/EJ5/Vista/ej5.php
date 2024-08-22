<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudios</title>
    
</head>
<body>
<form action="./Action//action5.php" method="post" id="form5">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" required>
    <br><br>

    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" id="apellido" required>
    <br><br>

    <label for="edad">Edad</label>
    <input type="number" name="edad" id="edad" required>
    <br><br>

    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" id="direccion" required>
    <br><br>

    <label for="sinestudios" >No estudio</label>
    <input type="radio" name="estudios" id="sinestudios" value="0" required>
    <label for="conestudios">Primario</label>
    <input type="radio" name="estudios" id="primario" value="1">
    <label for="secundario">Secundario</label>
    <input type="radio" name="estudios" id="secundario" value="2">
    <br>
    <label for="mujer">Mujer</label>
    <input type="radio" name="sexo" id="mujer" value= "mujer" >
    <label for="hombre">Hombre</label>
    <input type="radio" name="sexo" id="hombre"value="hombre" required>

    <input type="submit" name="enviar" id="enviar">

</form>
</body>
</html>