<?php

class control{

    public function bienvenidaUser($datos){

        $user = $datos['usuario'];

        $rta=  "Bienvenido $user!!!!, ¿Cómo estás hoy?";
        return $rta;
    }
}