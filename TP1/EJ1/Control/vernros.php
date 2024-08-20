<?php
class Numero{
    public function vernro($num){
        $elNroEs = "Incorrecto";
        
        if($num['numero'] === "0" && $num['numero'] != null){
            $elNroEs = "Cero";
        } else if($num['numero'] > 0 && $num['numero'] != null){
            $elNroEs = "Positivo";
        } else if($num['numero'] < 0 && $num['numero'] != null){
            $elNroEs = "Negativo";
        }
        return $elNroEs;
    }
}
    /*if($_POST){
        $nro = $_POST['nro'];
        echo "Número ingresado: " . $nro . "\n\n";
        $res = vernro($nro);

        if($nro != null){
            echo "\n\nEl Numero es: " . $res;
        } else {
            echo "No se ingreso un numero";
        }
    } else {
        echo "No hay datos";
    }*/
?>