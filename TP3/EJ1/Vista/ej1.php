<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="../funciones/libreria.js"></script>
</head>
<body>
    

    <form action="./action/action5.php" method="post" id="form5">
    <label for="nombre">Nombre</label>
   <input type="text" name="nombre" id="nombre">

   <label for="apellido">Apellido</label>
   <input type="text" name="apellido" id="apellido">

   <label for="edad">Edad</label>
   <input type="number" name="edad" id="edad">

   <label for="direccion">Direccion</label>
   <input type="text" name="direccion" id="direccion">


    <br>
    <label for="sinestudios">No estudio</label>
    <input type="radio" name="estudios" id="sinestudios" value="sinestudio">
    <label for="conestudios">Primario</label>
    <input type="radio" name="estudios" id="primario" value="primario">
    <label for="secundario">Secundario</label>
    <input type="radio" name="estudios" id="secundario" value="secundario">
    <br>
    <label for="mujer">Mujer</label>
    <input type="radio" name="sexo" id="mujer" value= "mujer">
    <label for="hombre">Hombre</label>
    <input type="radio" name="sexo" id="hombre"value="hombre">
    




    <input type="submit" name="enviar" id="enviar">

    </form>




</body>
</html>