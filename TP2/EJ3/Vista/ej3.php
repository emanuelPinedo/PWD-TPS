<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../../EJ3/Vista/Assets/libreria.js"></script>
    <link rel="stylesheet" href="../../../TP2/EJ3/Vista/Assets/CSS/styles.css">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card p-4" style="width: 300px; border: 12px solid grey;height: 380px;">
        <br>
        <h2 class="text-center mb-4">Member Login</h2>
        <form action="./Action//action3.php" method="post" id="form3">
            <div class="form-group">
                <label for="usuario" class="sr-only">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="clave" class="sr-only">Contraseña</label>
                <input type="password" class="form-control" id="clave" name="clave" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-block" style="background-color: #20c997; color: white;">Login</button>
        </form>
    </div>
</div>
</body>
</body>
</html>