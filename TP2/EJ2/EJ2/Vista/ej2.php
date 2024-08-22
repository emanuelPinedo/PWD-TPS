<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horas de Cursada</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="../../EJ2//Utils//libreria.js"></script>
</head>
<body>
    <h2>Ingresar Horas de Cursada - Programaci&oacute;n Web Din&aacute;mica</h2>
<form id="form2" action="./Action/MostrarHora.php" method="get">
    <label for="lunes">Lunes: </label>
    <input type="number" id="lunes" name="lunes"><br><br>

    <label for="martes">Martes: </label>
    <input type="number" id="martes" name="martes"><br><br>

    <label for="miercoles">Miércoles: </label>
    <input type="number" id="miercoles" name="miercoles"><br><br>

    <label for="jueves">Jueves: </label>
    <input type="number" id="jueves" name="jueves"><br><br>

    <label for="viernes">Viernes: </label>
    <input type="number" id="viernes" name="viernes"><br><br>

    <input type="submit" value="Calcular Total de Horas">
</form>
</body>
</html>