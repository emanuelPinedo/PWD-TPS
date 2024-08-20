<?php
Class Datos{
    public function mandarMensaje($datos){
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $direccion = $datos['direccion'];

        $mensaje = "";
        
        if ($edad >=18){
            $mensaje = "Hola, yo soy $nombre $apellido, tengo $edad años, vivo en $direccion y soy Mayor de Edad.";
        } else {
            $mensaje = "Hola, yo soy $nombre $apellido, tengo $edad años, vivo en $direccion y soy Menor de Edad.";
        }
        return $mensaje;
    }
}
?>