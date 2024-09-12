<?php
include_once ('../../config.php');

$newAuto = data_submitted();
$abmPerso = new ABMPersona();
$abmAuto = new ABMAuto();

//Verifico que el dueño este registrado
//quiero dormir
$personaDni = array('NroDni' => $newAuto['DniDuenio']);
$persoExiste = $abmPerso->buscar($personaDni);

echo '<pre>';
print_r($newAuto);
echo '</pre>';

if(empty($persoExiste)){
    //no existe, o sea q no esta registrada
    $msj = "El DNI del dueño no está registrado. <a href='http://localhost/PWD-TPS/TP4/Vista/NuevaPersona.php'>Registrar nueva persona</a>";
} else {
    //echo "entro al else";
    //La persona existe, esta registrada
    $res = $abmAuto->alta($newAuto);
    if($res){
        $msj = "Auto registrado";
    } else {
        $msj = "Pedilo. El auto no se puede registrar. (ELLA ME LLAMA ME LLAMA Y NO SE Q HACER)";
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
    <h1>Resultado Registro del Auto goooood</h1>
    <?php echo $msj;?>
    <br>
    <a href="http://localhost/PWD-TPS/TP4/Vista/NuevoAuto.php#">Volver</a>
</body>
</html>