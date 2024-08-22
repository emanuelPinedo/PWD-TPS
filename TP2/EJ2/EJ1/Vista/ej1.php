<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 1</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="../Utils//libreria.js"></script>
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
        <input type="number" id="number" name="numero">
        <br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>