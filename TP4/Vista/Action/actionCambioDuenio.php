<?php
include_once ('../../config.php');

$datos = data_submitted();
$resp = false;

//obj para manejar los adtos xd
$objAbmAuto = new ABMAuto();
$objAbmPersona = new ABMPersona();

// Busco auto x patente
$auto = $objAbmAuto->buscar(['Patente' => $datos['Patente']]);

if (count($auto) > 0) {
    $auto = $auto[0];

    // Buscar persona x dni :v
    $persona = $objAbmPersona->buscar(['NroDni' => $datos['NroDni']]);
    
    if (count($persona) > 0) {
        $persona = $persona[0];

        // Cambio el dueño nasheee
        $auto->setObjPersona($persona); //Ingresar al nuevo dueño xd
        if ($auto->modificar()) {
            echo "<p>El dueño del auto con la patente {$auto->getPatente()} ha sido cambiado (gooood).</p>";
            $resp = true;
        } else {
            echo "<p>Error, no se pudo cmabiar el dueño del auto :c.</p>";
        }
    } else {
        echo "<p>No se encontró alguien con este dni (nt).</p>";
    }
} else {
    echo "<p>No se encontró un auto con esta patente xd.</p>";
}
?>
<a href="http://localhost/PWD-TPS/TP4/Vista/CambioDuenio.php#">Volver</a>