<?php

class control{

    public function Cinema($datos){

        $titulo = $datos['titulo'];
        $actores = $datos['actores'];
        $director = $datos['director'];
        $guion = $datos['guion'];
        $produccion = $datos['produccion'];
        $anio = $datos['anio'];
        $nacionalidad = $datos['nacionalidad'];
        $genero = $datos['genero'];
        $duracion = $datos['duracion'];
        $restricciones = $datos['restricciones'];
        $sinopsis = $datos['sinopsis'];
        

        $rta =  "
        <div class='alert alert-success' role='alert'>
            <h4 class='alert-heading'>La película introducida es</h4>
            <p><strong>Título:</strong> $titulo</p>
            <p><strong>Actores:</strong> $actores</p>
            <p><strong>Director:</strong> $director</p>
            <p><strong>Guion:</strong> $guion</p>
            <p><strong>Producción:</strong> $produccion</p>
            <p><strong>Año:</strong> $anio</p>
            <p><strong>Nacionalidad:</strong> $nacionalidad</p>
            <p><strong>Género:</strong> $genero</p>
            <p><strong>Duración:</strong> $duracion minutos</p>
            <p><strong>Restricciones de edad:</strong> $restricciones</p>
            <p><strong>Sinopsis:</strong> $sinopsis</p>
            </div>";
        
        return $rta;
    }
}