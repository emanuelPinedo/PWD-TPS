<?php
include_once ('../../config.php');
include_once('../Estructura/header.php');
$newAuto = data_submitted();
$abmPerso = new ABMPersona();
$abmAuto = new ABMAuto();

//verifico que el dueño este registrado
$personaDni = array('NroDni' => $newAuto['DniDuenio']);
$persoExiste = $abmPerso->buscar($personaDni);

echo '<pre>';
print_r($newAuto);
echo '</pre>';

if(empty($persoExiste)){
    //no existe la persona ingresada
    $msj = "El DNI del dueño no está registrado. <a href='http://localhost/PWD-TPS/TP4/Vista/NuevaPersona.php'>Registra la nueva persona pa</a>";
} else {
    $persona = $persoExiste[0];

    $newAuto['DniDuenio'] = $persona['NroDni'];
    
    $res = $abmAuto->alta($newAuto);
    if($res){
        $msj = "Auto registrado correctamente.";
    } else {
        $msj = "El auto no se puede registrar.";
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