<?php
$title = "TP4";
// $jsFile = "";
// $cssFile = "";
$tp1ej1 = "../../TP1/EJ1/Vista/ej1.php";
$tp1ej2 = "../../TP1/EJ2/Vista/ej2.php";
$tp1ej3 = "../../TP1/EJ3/Vista/ej3.php";
$tp1ej4 = "../../TP1/EJ4/Vista/ej4.php";
$tp1ej5 = "../../TP1/EJ5/Vista/ej5.php";
$tp1ej6 = "../../TP1/EJ6/Vista/ej6.php";
$tp1ej7 = "../../TP1/EJ7/Vista/ej7.php";
$tp1ej8 = "../../TP1/EJ8/Vista/ej8.php";
$tp2ej3 = "../../TP2/EJ3/views/formulario.php";
$tp2ej4 = "../../TP2/EJ4/Vista/ej4.php";
$tp3ej1 = "../../TP3/EJ1/Vista/ej1.php";
$tp3ej2 = "../../TP3/EJ2/Vista/ej2.php";
$tp3ej3 = "../../TP3/EJ3/Vista/ej3.php";
include_once('../Vista/Estructura/header.php');
include_once('../Modelo/Auto.php');
include_once('../Control/ABMAuto.php');
include_once('../Modelo/Persona.php');
include_once('../config.php');

// Crear una instancia del controlador ABMAuto
$abmAuto = new ABMAuto();

// Buscar todos los autos
$autos = $abmAuto->buscar(null);
?>

<table border="1">
  <h1>Lista de Autos</h1>
<?php

if(count($autos)>0){
  echo'<tr>
  <th>Patente</th>
  <th>Marca</th>
  <th>Modelo</th>
  <th>Nombre del Dueño</th>
  <th>Apellido</th>
  <th>DNI</th>
</tr>';
   foreach ($autos as $abmAuto) { 
      $objPerso = $abmAuto->getObjPersona();
       echo '<tr><td style="width:10px;">'.$abmAuto->getPatente().'</td>';
       echo '<td style="width:10px;">'.$abmAuto->getMarca().'</td>';
       echo '<td style="width:10px;">'.$abmAuto->getModelo().'</td>';
       echo '<td style="width:10px;">'.$objPerso->getNombre().'</td>';
       echo '<td style="width:10px;">'.$objPerso->getApellido().'</td>';
       echo '<td style="width:10px;">'.$objPerso->getNroDni().'</td>';
      '</tr>'; 
 }
}else{

  echo '<h3> No se encontraron registros </h3>';

}

?>
    </table>  
  
<?php
include_once '../../estructura/footer.php';
?>