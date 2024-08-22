<?php
class HorasCursada {
    public function calcularTotalHoras($datos) {
        $respuesta = array_sum($datos);
        return $respuesta;
    }
}