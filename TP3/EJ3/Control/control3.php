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

        return [
            'titulo' => $titulo,
            'actores' => $actores,
            'director' => $director,
            'guion' => $guion,
            'produccion' => $produccion,
            'anio' => $anio,
            'nacionalidad' => $nacionalidad,
            'genero' => $genero,
            'duracion' => $duracion,
            'restricciones' => $restricciones,
            'sinopsis' => $sinopsis,
        ];
    }
}