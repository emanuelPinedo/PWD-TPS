<?php

class control{

 public function operacion($datos){

    $operacion = $datos['operacion'];

    $num1 = $datos['numero1'];
    $num2 = $datos['numero2'];
    $final = 0;

    if($operacion == "sumar"){
        $final = $num1 + $num2;
    }else if($operacion == "restar"){
        $final = $num1 - $num2;
    }else{
        $final = $num1 * $num2;
    }

    return $final;

}
}