<?php
include_once ('../../config.php');
include_once('../Estructura/header.php');
$newAuto = data_submitted();
$abmPerso = new ABMPersona();
$abmAuto = new ABMAuto();

//verifico que el dueño este registrado
$personaDni = array('NroDni' => $newAuto['DniDuenio']);
$persoExiste = $abmPerso->buscar($personaDni);

// Verifica si ya hay una persona con ese DNI
if (empty($persoExiste)) {
    $msj = "El DNI del dueño no está registrado. <a href='http://localhost/PWD-TPS/TP4/Vista/NuevaPersona.php'>Registra la nueva persona</a>";
} else {
    $persona = $persoExiste[0]; // La persona existe, continuamos

    // Verificamos si ya existe un auto con la misma patente
    $autoPatente = array('Patente' => $newAuto['Patente']);
    $autoExiste = $abmAuto->buscar($autoPatente); 

    if (!empty($autoExiste)) {
        // Ya existe un auto con la misma patente
        $msj = "Ya hay un auto registrado con la misma patente.";
    } else {
        // No existe el auto con esa patente, procedemos a registrarlo
        $newAuto['DniDuenio'] = $persona['NroDni'];

        $res = $abmAuto->alta($newAuto);
        if ($res) {
            $msj = "Auto registrado correctamente.";
        } else {
            $msj = "El auto no se puede registrar.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Resultado Registro del Auto</h1>
    <?php echo $msj;?>
    <br>
    <a href="http://localhost/PWD-TPS/TP4/Vista/NuevoAuto.php#">Volver</a>
</body>
</html>
<?php include_once("../Estructura/footer.php"); ?>