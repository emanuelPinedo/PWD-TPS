<?php
class ControlImg{
    private $dir;
    private $urlDir;

    public function __construct(){
        $this->dir = "../../Vista/Assets/Imagenes/";//Este se usa para subir la imagen
        $this->urlDir = "/PWD-TPS/TP3/EJ3/Vista/Assets/Imagenes/";//Este se usa para mostrar la imagen
    }

    public function getDir(){
        return $this->dir;
    }

    public function setDir($dir){
        $this->dir = $dir;
    }

    public function getUrlDir() {
        return $this->urlDir;
    }

    public function setUrlDir($dir){
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