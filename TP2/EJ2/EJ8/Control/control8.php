<?php

class control{

  public function ej8($datos){

    $estado = $datos['estudios'];

    $edad = $datos['edad'];
    $precio = 0;
    //Si es estudiante o menor de 12 años el precio es de $160, si es estudiante 
    //y mayor o igual de 12 años el precio es de $180, en cualquier otro caso el precio es de $300.
    if($estado == "estudio" && $edad<12){
      $precio = 160;
    } elseif ($estado == "estudio" && $edad >=12){
      $precio = 180;
    } else{ 
      $precio =300;
    }

    return $precio;
  }
}