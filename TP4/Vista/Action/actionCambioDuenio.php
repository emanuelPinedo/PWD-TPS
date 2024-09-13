<?php
include_once('../../config.php');

$datos = data_submitted();
$resp = false;

$objAbmAuto = new ABMAuto();
$objAbmPersona = new ABMPersona();

$autoArray = $objAbmAuto->buscar(['Patente' => $datos['Patente']]);

if (count($autoArray) > 0) {
    $auto = $autoArray[0];

    // buscar persona x dni:v
    $personaArray = $objAbmPersona->buscar(['NroDni' => $datos['NroDni']]);
    
    if (count($personaArray) > 0) {
        $persona = $personaArray[0];

        // Actualizar el dueño del auto
        $auto['DniDuenio'] = $persona['NroDni']; //reemplazar dueñoxd

        //array apra modificar
        $datosAutoModificacion = [
            'Patente' => $auto['Patente'],
            'Marca' => $auto['Marca'],
            'Modelo' => $auto['Modelo'],
            'DniDuenio' => $persona['NroDni'], // pasar dni
        ];

        $resp = $objAbmAuto->modificacion($datosAutoModificacion);

        if ($resp) {
            echo "<p>El dueño del auto con la patente {$auto['Patente']} ha sido cambiado NASHE GOD.</p>";
        } else {
            echo "<p>Error, No se pudo cambiar el dueño del auto (nt che).</p>";
        }
    } else {
        echo "<p>Error, No se encontró una persona con este DNI (pedilo).</p>";
    }
} else {
    echo "<p>Error, No se encontró un auto con esta patente (mal ahí).</p>";
}
?>
<a href="http://localhost/PWD-TPS/TP4/Vista/CambioDuenio.php#">Volver</a>