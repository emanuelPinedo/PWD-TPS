<?php

class control{

    public function infoPersona($datos){

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

        $rta=  "Mi nombre es $nombre $apellido, tengo $edad y vivo en $direccion, soy $sexo y $mensajeEstudio";
        return $rta;
    }

   
    public function cantDeportes($datos) {
        $cantidadDeportes = "";
    
        // Verificar si 'deporte' está definido y no es una cadena vacía
        if (isset($datos['deporte']) && !empty($datos['deporte'])) {
            $cantidadDeportes = count($datos['deporte']);
        } else {
            $cantidadDeportes = "no practica deportes";
        }
    
        return $cantidadDeportes;
    }

}