<?php
include_once('../../config.php');

$datos = data_submitted();
$resp = false;

$objAbmAuto = new ABMAuto();
$objAbmPersona = new ABMPersona();

// Busco auto por patente
$autoArray = $objAbmAuto->buscar(['Patente' => $datos['Patente']]);

if (count($autoArray) > 0) {
    $auto = $autoArray[0];

    // Buscar persona por dni
    $personaArray = $objAbmPersona->buscar(['NroDni' => $datos['NroDni']]);
    
    if (count($personaArray) > 0) {
        $persona = $personaArray[0];

        // Ajuste para asegurar que el dato DniDuenio sea correctamente establecido
        $auto['DniDuenio'] = $persona['NroDni'];
        
        // Validar si la patente existe y si el objeto fue cargado correctamente
        if (isset($auto['Patente'])) {
            $resp = $objAbmAuto->modificacion($auto);
            if ($resp) {
                echo "<p>El dueño del auto con la patente {$auto['Patente']} ha sido cambiado (gooood).</p>";
            } else {
                echo "<p>Error, no se pudo cambiar el dueño del auto :c.</p>";
            }
        } else {
            echo "<p>Error: La patente no está definida.</p>";
        }
    } else {
        echo "<p>No se encontró una persona con este DNI (nt).</p>";
    }
} else {
    echo "<p>No se encontró un auto con esta patente xd.</p>";
}
?>
<a href="http://localhost/PWD-TPS/TP4/Vista/CambioDuenio.php#">Volver</a>