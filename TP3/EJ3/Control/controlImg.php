<?php
class ControlImg{
    private $dir;
    public function __construct(){
        $this->dir = "../../Vista/Assets/Imagenes/";
    }
    public function getDir(){
        return $this->dir;
    }

    public function setDir($dir){
        $this->dir = $dir;
    }

    public function verificaTipo($archivo) {
        return $archivo['imagen']['type'] == 'image/jpeg' || $archivo['imagen']['type'] == 'image/png' || $archivo['imagen']['type'] == 'image/jpg';
    }

    public function subirArchivo($array) {
        $respuesta = "";
        if ($array['imagen']['error'] <= 0) {
            if($this->verificaTipo($array)){
                if (!copy($array['imagen']['tmp_name'], $this->getDir() . $array['imagen']['name'])) {
                    $respuesta = 0; // no se cargó el archivo
                } else {
                    $respuesta = 1; // se copió el archivo
                }
            } else {
                $respuesta = -2; // no es una imagen válida
            }
        } else {
            $respuesta = -1; // error al subir el archivo
        }
        return $respuesta;
    }
}