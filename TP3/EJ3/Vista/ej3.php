<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Cinem@s</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="../Vista/Assets/libreria.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header" style="color: rgb(37, 136, 251);">
                <h2>Cinem@s</h2>
            </div>
            <div class="card-body">
                <form action="./Action//action3.php" method="post" enctype="multipart/form-data" id="form3">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="titulo" class="form-label"><strong>Título</strong></label>
                            <input type="text" class="form-control" id="titulo" placeholder="Titulo" name="titulo">
                        </div>
                        <div class="col-md-6">
                            <label for="actores" class="form-label"><strong>Actores</strong></label>
                            <input type="text" class="form-control" id="actores" placeholder="Actores" name="actores">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="director" class="form-label"><strong>Director</strong></label>
                            <input type="text" class="form-control" id="director" placeholder="Director" name="director">
                        </div>
                        <div class="col-md-6">
                            <label for="guion" class="form-label"><strong>Guión</strong></label>
                            <input type="text" class="form-control" id="guion" placeholder="Guion" name="guion">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="produccion" class="form-label"><strong>Producción</strong></label>
                            <input type="text" class="form-control" id="produccion" name="produccion">
                        </div>
                        <div class="col-md-2">
                            <label for="anio" class="form-label"><strong>Año</strong></label>
                            <input type="text" class="form-control" id="anio" maxlength="4" pattern="\d{4}" name="anio">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nacionalidad" class="form-label"><strong>Nacionalidad</strong></label>
                            <input type="text" class="form-control" id="nacionalidad" name="nacionalidad">
                        </div>
                        <div class="col-md-3">
                            <label for="genero" class="form-label"><strong>Genero</strong></label>
                            <input type="text" class="form-control" id="genero" name="genero">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="duracion" class="form-label"><strong>Duración</strong></label>
                            <input type="text" class="form-control" id="duracion" maxlength="3" pattern="\d{1,3}" name="duracion">
                            (minutos)
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><strong>Restricciones de edad</strong></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="restricciones" id="todosPublico" value="Todos los públicos">
                                <label class="form-check-label" for="todosPublico">Todo Público</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="restricciones" id="mayores7" value="Mayores de 7 años">
                                <label class="form-check-label" for="mayores7">Mayores de 7 años</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="restricciones" id="mayores18" value="Mayores de 18 años">
                                <label class="form-check-label" for="mayores18">Mayores de 18 años</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="sinopsis" class="form-label"><strong>Sinopsis</strong></label>
                        <textarea class="form-control" id="sinopsis" rows="3" name="sinopsis"></textarea>
                    </div>
                    <div class="col-md-6">
                            <label for="imagen" class="form-label"><strong>Imagen de la película</strong></label>
                            <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*">
                        </div>
                    <div class="text-end">
                        <input type="submit" class="btn btn-primary" value="Enviar">
                        <input type="reset" class="btn btn-secondary" value="Borrar">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>