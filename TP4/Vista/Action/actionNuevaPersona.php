<?php
include_once ('../../config.php');
include_once('../Estructura/header.php');

$newPerso = data_submitted();
echo '<pre>';

echo '</pre>';
$abmPerso = new ABMPersona;
$buscarPersona = $abmPerso->buscar('NroDni');
$existePersona = false; 

foreach ($buscarPersona as $persona) {
    if ($persona['NroDni'] == $newPerso['NroDni']) {
        $existePersona = true; 
        break; 
    }
}

if (!$existePersona) {
    // Si no existe, agregar la persona
    $validarPerso = $abmPerso->alta($newPerso);
    if ($validarPerso) {
        $msj = "Persona agregada al sistema.";
    } else {
        $msj = "Error. No ha sido posible agregar a la persona.";
    }
} else {
    // Si la persona ya existe
    $msj = "Ya hay una persona registrada con el mismo número de DNI.";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Resultado Nueva Persona</h1>
    <?php echo $msj;?>
    <a href="http://localhost/PWD-TPS/TP4/Vista/NuevaPersona.php#">Volver</a>
</body>
</html>
<?php include_once("../Estructura/footer.php"); ?>