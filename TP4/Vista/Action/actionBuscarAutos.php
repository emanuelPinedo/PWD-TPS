<?php
include_once "../../config.php";

$datos = data_submitted();
$resp = false;
$control = new ABMAuto();//quisiera declarar mi amor, pero solo sé declarar variables

echo "<h1>Resultado de la Búsqueda</h1>";
        echo "<table border='1'>";
        echo "<tr><th>Patente</th><th>Marca</th><th>Modelo</th></tr>";

// Verificar que se haya enviado la patente
if (isset($datos['patente']) && !empty($datos['patente'])) {
    if($auto = $control->buscar($datos)){
        if($auto > 0){
            foreach($auto as $autito){
                echo "<tr>";
                echo "<td>" . htmlspecialchars($autito->getPatente()) . "</td>";
                echo "<td>" . htmlspecialchars($autito->getMarca()) . "</td>";
                echo "<td>" . htmlspecialchars($autito->getModelo()) . "</td>";
                echo "</tr>";
            }
        }
    }
}
echo "</table>";
?>
<a href="http://localhost/PWD-TPS/TP4/Vista/buscarAutos.php#">Volver</a>