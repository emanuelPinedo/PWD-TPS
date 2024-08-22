<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 1</title>
    
</head>
<style>
    body{
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 60px;
    }

    #form1{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    #number{
        height: 40px;
    }

</style>
<body>
    <form id="form1" action="./Action//MostrarNro.php" method="post">
        <label for="number">Ingrese un n&uacute;mero:</label>
        <br>
        <input type="number" id="number" name="numero" required>
        <br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>