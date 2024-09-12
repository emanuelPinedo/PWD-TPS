<?php
$title = "Ejercicio 4";
$jsFile = "./Assets/libreria.js";
// $cssFile = "./Assets/CSS/styles.css";
$tp1ej1 = "../../../TP1/EJ1/Vista/ej1.php";
$tp1ej2 = "../../../TP1/EJ2/Vista/ej2.php";
$tp1ej3 = "../../../TP1/EJ3/Vista/ej3.php";
$tp1ej4 = "../../../TP1/EJ4/Vista/ej4.php";
$tp1ej5 = "../../../TP1/EJ5/Vista/ej5.php";
$tp1ej6 = "../../../TP1/EJ6/Vista/ej6.php";
$tp1ej7 = "../../../TP1/EJ7/Vista/ej7.php";
$tp1ej8 = "../../../TP1/EJ8/Vista/ej8.php";
$tp2ej3 = "../../EJ3/views/formulario.php";
$tp2ej4 = "#";
$tp3ej1 = "../../../TP3/EJ1/Vista/ej1.php";
$tp3ej2 = "../../../TP3/EJ2/Vista/ej2.php";
$tp3ej3 = "../../../TP3/EJ3/Vista/ej3.php";
$tp4 = "../../../TP4/Vista/VerAutos.php";
include "../../../estructura/header.php" ?>

<body>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header" style="color: rgb(37, 136, 251);">
        <h2>Cinem@s</h2>
      </div>
      <div class="card-body">
        <form action="./Action//action4.php" method="post" enctype="multipart/form-data" id="form4">
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
              <label for="genero" class="form-label"><strong>Género</strong></label>
              <select class="form-select" id="genero" name="genero">
                <option value="Comedia">Comedia</option>
                <option value="Acción">Acción</option>
                <option value="Romance">Romance</option>
                <option value="Otras">Otras</option>
              </select>
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
          <div class="d-flex justify-content-end">
            <input type="submit" class="btn btn-primary me-2" value="Enviar">
            <input type="reset" class="btn btn-secondary" value="Borrar">
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php include "../../../estructura/footer.php" ?>