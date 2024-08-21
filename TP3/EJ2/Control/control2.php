<?php

class Archivo{
    private $dir;

    public function __construct(){
        $this->dir = "../../Vista/Assets/Archivos/";
    }

    public function getDir(){
        return $this->dir;
    }

    public function setDir($dir){
        $this->dir = $dir;
    }

    public function verificaTipo ($archivo){
        return $archivo['miArchivo']['type'] == 'text/plain';
    }

    public function subirArchivo($array){
        $respuesta = "";
        if ($array['miArchivo']['error'] <= 0) {
            if($this->verificaTipo($array)){
                if (!copy($array['miArchivo']['tmp_name'], $this->getDir() . $array['miArchivo']['name'])) {
                    $respuesta = 0; //no se cargó el archivo";
                } else {
                    $respuesta = 1; //se copió el archivo
                }
            } else{
                $respuesta = -2; //no es txt
            }
        } else {
            $respuesta = -1;
        }
        return $respuesta;
    }
}