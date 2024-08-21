<?php

class Archivo{
    private $dir;

    public function __construct(){
        $this->dir = "../../Archivos/";
    }

    public function getDir(){
        return $this->dir;
    }

    public function setDir($dir){
        $this->dir = $dir;
    }

    public function verificaTipo($archivo) {
        // Definir los tipos MIME válidos
        $tiposValidos = ['application/msword', 'application/pdf'];
        $tamanoMaximo = 2 * 1024 * 1024; // 2 MB en bytes
    
        // Verificar tipo de archivo
        $tipoValido = in_array($archivo['type'], $tiposValidos);
        // Verificar tamaño de archivo
        $tamanoValido = $archivo['size'] <= $tamanoMaximo;
    
        return $tipoValido && $tamanoValido;
    }

    public function subirArchivo($array) {
        $respuesta = "";
    
        // Verificar si el archivo fue subido sin errores
        //isset devuelve true si la variable existe y el valor no es null
        if (isset($array['miArchivo']) && $array['miArchivo']['error'] === UPLOAD_ERR_OK) {
            // Pasar solo el archivo a verificaTipo
            if ($this->verificaTipo($array['miArchivo'])) {
                // Mover el archivo a la ubicación deseada (basename obtiene el nombre base del archivo de una ruta)
                if (move_uploaded_file($array['miArchivo']['tmp_name'], $this->getDir() . basename($array['miArchivo']['name']))) {
                    $respuesta = 1; // Archivo cargado con éxito
                } else {
                    $respuesta = 0; // Error al mover el archivo
                }
            } else {
                $respuesta = -2; // Error: tipo de archivo no permitido o tamaño excesivo
            }
        } else {
            $respuesta = -1; // Error: archivo no accesible o error en la subida
        }
    
        return $respuesta;
    }
}