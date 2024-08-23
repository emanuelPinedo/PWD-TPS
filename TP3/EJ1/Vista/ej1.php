<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Subir Archivo</title>
</head>

<body class="text-light bg-dark d-flex align-items-center justify-content-center flex-column mt-5">
  <h2>Subir Archivo</h2>
  <form action="./Action//action1.php" method="post" enctype="multipart/form-data">
    <label for="miArchivo">Elige un archivo (.doc o .pdf, máximo 2MB):</label><br><br>
    <input type="file" class="border rounded border-secondary p-1" name="miArchivo" id="miArchivo"><br><br>
    <input type="submit" class="bg-info w-100 border rounded border-secondary" value="Subir Archivo">
  </form>
</body>

</html>