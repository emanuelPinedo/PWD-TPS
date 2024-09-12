<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

  <?php
  if (isset($cssFile)) {
    echo '<link rel="stylesheet" href="' . $cssFile . '">';
  }
  if (isset($jsFile)) {
    echo '<script src="' . $jsFile . '"></script>';
  }
  if (isset($title)) {
    echo '<title>' . $title . '</title>';
  }
  ?>
  <title>Document</title>
</head>

<body class="vh-100 d-flex flex-column justify-between">
  <header class="w-100">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav w-50 d-flex justify-between align-center">
          <!-- Dropdown -->
          <li class="ml-5 nav-item dropdown">
            <button class="btn btn-primary dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              TP1
            </button>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <?php if (isset($tp1ej1)) {
                echo '<a class="dropdown-item" href="' . $tp1ej1 . '">Ejercicio 1</a>';
              } ?>
              <?php if (isset($tp1ej2)) {
                echo '<a class="dropdown-item" href="' . $tp1ej2 . '">Ejercicio 2</a>';
              } ?>
              <?php if (isset($tp1ej3)) {
                echo '<a class="dropdown-item" href="' . $tp1ej3 . '">Ejercicio 3</a>';
              } ?>
              <?php if (isset($tp1ej4)) {
                echo '<a class="dropdown-item" href="' . $tp1ej4 . '">Ejercicio 4</a>';
              } ?>
              <?php if (isset($tp1ej5)) {
                echo '<a class="dropdown-item" href="' . $tp1ej5 . '">Ejercicio 5</a>';
              } ?>
              <?php if (isset($tp1ej6)) {
                echo '<a class="dropdown-item" href="' . $tp1ej6 . '">Ejercicio 6</a>';
              } ?>
              <?php if (isset($tp1ej7)) {
                echo '<a class="dropdown-item" href="' . $tp1ej7 . '">Ejercicio 7</a>';
              } ?>
              <?php if (isset($tp1ej8)) {
                echo '<a class="dropdown-item" href="' . $tp1ej8 . '">Ejercicio 8</a>';
              } ?>


            </div>
          </li>
          <li class="ml-5 nav-item dropdown">
            <button class="btn btn-primary dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              TP2
            </button>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <?php if (isset($tp2ej3)) {
                echo '<a class="dropdown-item" href="' . $tp2ej3 . '">Ejercicio 3</a>';
              } ?>
              <?php if (isset($tp2ej4)) {
                echo '<a class="dropdown-item" href="' . $tp2ej4 . '">Ejercicio 4</a>';
              } ?>
            </div>
          </li>

          <li class="ml-5 nav-item dropdown">
            <button class="btn btn-primary dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              TP3
            </button>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <?php if (isset($tp3ej1)) {
                echo '<a class="dropdown-item" href="' . $tp3ej1 . '">Ejercicio 1</a>';
              } ?>
              <?php if (isset($tp3ej2)) {
                echo '<a class="dropdown-item" href="' . $tp3ej2 . '">Ejercicio 2</a>';
              } ?>
              <?php if (isset($tp3ej3)) {
                echo '<a class="dropdown-item" href="' . $tp3ej3 . '">Ejercicio 3</a>';
              } ?>
            </div>
          </li>

        </ul>
      </div>
    </nav>
  </header>