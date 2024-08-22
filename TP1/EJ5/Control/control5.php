<?php

class control{

    public function decirquiensos($datos){

        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $direccion = $datos['direccion'];
        $sexo = $datos['sexo'];
        $estudio = $datos['estudios'];

        $mensajeEstudio = "";
        if($estudio == 0){
            $mensajeEstudio = "no poseo estudios";
        }else if($estudio == 1){
            $mensajeEstudio = "poseo estudios primarios";
        }else if($estudio ==2){
            $mensajeEstudio = "poseo estudios secundarios";
        }

        $rta=  "Mi nombre es $nombre y mi apellido $apellido, tengo $edad y vivo en $direccion, soy $sexo y $mensajeEstudio";
        return $rta;
    }

    public function edad($datos){

        $edad = $datos['edad'];
        $rta="";
        if($edad>=18){
            $rta = "mayor";
        }else{
            $rta = "menor";
        }
        return $rta;
    }
}