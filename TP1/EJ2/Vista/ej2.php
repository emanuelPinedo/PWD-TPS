<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horas de Cursada</title>
     
</head>
<body>
    <h2>Ingresar Horas de Cursada - Programaci&oacute;n Web Din&aacute;mica</h2>
<form id="form2" action="./Action/MostrarHora.php" method="get">
    <label for="lunes">Lunes: </label>
    <input type="number" id="lunes" name="lunes" required><br><br>

    <label for="martes">Martes: </label>
    <input type="number" id="martes" name="martes" required><br><br>

    <label for="miercoles">Miércoles: </label>
    <input type="number" id="miercoles" name="miercoles" required><br><br>

    <label for="jueves">Jueves: </label>
    <input type="number" id="jueves" name="jueves" required><br><br>

    <label for="viernes">Viernes: </label>
    <input type="number" id="viernes" name="viernes" required><br><br>

    <input type="submit" value="Calcular Total de Horas">
</form>
</body>
</html>