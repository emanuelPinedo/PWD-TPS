<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="../../EJ6//Utils//libreria.js"></script>
</head>
<body>
    

<form action="./Action//action6.php" method="post" id="form6">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <br><br>

    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" id="apellido">
    <br><br>

    <label for="edad">Edad</label>
    <input type="number" name="edad" id="edad">
    <br><br>

    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" id="direccion">
    <br><br>

    <label for="sinestudios">No estudio</label>
    <input type="radio" name="estudios" id="sinestudios" value="sinestudio">
    <label for="conestudios">Primario</label>
    <input type="radio" name="estudios" id="primario" value="primario">
    <label for="secundario">Secundario</label>
    <input type="radio" name="estudios" id="secundario" value="secundario">
    
    <br><br>
    <label for="mujer">Mujer</label>
    <input type="radio" name="sexo" id="mujer" value= "mujer">
    <label for="hombre">Hombre</label>
    <input type="radio" name="sexo" id="hombre"value="hombre">

    <br><br>
    <label for="tennis">Tennis</label>
    <input type="checkbox" name="deporte[]" id="tennis">
    <label for="futbol">Futbol</label>
    <input type="checkbox" name="deporte[]" id="futbol">
    <label for="basquet">Basquet</label>
    <input type="checkbox" name="deporte[]" id="basquet">
    <label for="voley">Voley</label>
    <input type="checkbox" name="deporte[]" id="voley">
    <br><br>

    <input type="submit" name="enviar" id="enviar">

</form>




</body>
</html>