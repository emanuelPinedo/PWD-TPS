<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="../../EJ3//Utils//libreria.js"></script>
    <link rel="stylesheet" href="../../../TP2//EJ3//Vista//Assets//CSS//styles.css">
</head>
<body>
<div class="todosdivs">
    <form action="./Action//action3.php" method="post" id="form3">
        <h1>Login</h1>
            <div class="inputbox">
                <input type="usuario" placeholder="Usuario" id="usuario" name="usuario">
            </div>
            <div class="inputbox">
                <input type="password" placeholder="Contraseña" id="clave" name="clave">
            </div>
            <br>
            <input type="submit" class="boton" value="Login">
    </form>
</div>
</body>
</html>