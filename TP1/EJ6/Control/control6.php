<?php

class control{

    public function infoPersona($datos){

        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $direccion = $datos['direccion'];
        $sexo = $datos['sexo'];
        $estudio = $datos['estudios'];

        $rta=  "Mi nombre es $nombre $apellido, tengo $edad y vivo en $direccion, soy $sexo y mis estudios son: $estudio";
        return $rta;
    }

    public function cantDeportes($datos){
        $cantidadDeportes = count($datos['deporte']);
        return $cantidadDeportes;

    }

}