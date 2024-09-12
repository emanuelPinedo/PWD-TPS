<?php
include_once ('../../config.php');

$newAuto = data_submitted();
$abmPerso = new ABMPersona();
$abmAuto = new ABMAuto();

// Verifico que el dueño esté registrado
$personaDni = array('NroDni' => $newAuto['DniDuenio']);
$persoExiste = $abmPerso->buscar($personaDni);

echo '<pre>';
print_r($newAuto);
echo '</pre>';

if(empty($persoExiste)){
    // no existe el wacho ingresado, no esta registrado pa
    $msj = "El DNI del dueño no esta registrado. <a href='http://localhost/PWD-TPS/TP4/Vista/NuevaPersona.php'>Registrar nueva persona</a>";
} else {
    // si la persona existe, entonces esta registrada nasheeee
    $persona = $persoExiste[0];
    $newAuto['DniDuenio'] = $persona;
    
    $res = $abmAuto->alta($newAuto);
    if($res){
        $msj = "Auto registrado correctamente, tipo crack q sos";
    } else {
        $msj = "El auto no se puede registrar. Pedilo (ELLA ME LLAMA ME LLAMA)";
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