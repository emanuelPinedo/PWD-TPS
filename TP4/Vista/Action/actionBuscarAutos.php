<?php
include_once "../../config.php";
include_once('../Estructura/header.php');
$datos = data_submitted();
$resp = false;
$control = new ABMAuto();

echo "<h1>Resultado de la Búsqueda</h1>";
echo "<table border='1'>";
echo "<tr><th>Patente</th><th>Marca</th><th>Modelo</th></tr>";

//verificar q se hjaya mandado la patente
if (isset($datos['Patente']) && !empty($datos['Patente'])) {
    // buscar los autos (ahora devuelve arrays en lugar de objetos así no usamos gets)
    $autos = $control->buscar($datos);
    
    if (!empty($autos)) {
        // Iterar sobre los resultados
        foreach ($autos as $autoArray) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($autoArray['Patente']) . "</td>";
            echo "<td>" . htmlspecialchars($autoArray['Marca']) . "</td>";
            echo "<td>" . htmlspecialchars($autoArray['Modelo']) . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No se encontraron autos con esa patente.</td></tr>";
    }
} else {
    echo "<tr><td colspan='3'>Por favor, ingrese una patente.</td></tr>";
}
echo "</table>";

?>
<a href="http://localhost/PWD-TPS/TP4/Vista/buscarAutos.php#">Volver</a>

<?php include_once("../Estructura/footer.php"); ?>