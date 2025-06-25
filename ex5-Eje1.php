<?php

$precio_base = 100;

$nombre = isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : '';
$anio_nacimiento = isset($_REQUEST['edad']) ? (int) $_REQUEST['edad'] : 0;
$anio_actual = date("Y");
$edad = $anio_actual - $anio_nacimiento;


function descuento($e){
    if($e < 15){
        return 0.05;
    } elseif($e <= 30){
        return 0.10; 
    } elseif($e > 30){
        return 0.30; 
    } else {
        return 0.20; 
    }
}

function color($e){
    if($e < 15){
        return "d64747";
    } elseif($e <= 30){
        return "47d686";
    } elseif($e > 30){
        return "477bd6";
    } else {
        return "8460d1";
    }
}


$descuento_aplicado = descuento($edad);
$monto_descuento = $precio_base * $descuento_aplicado;
$precio_final = $precio_base - $monto_descuento;


$color_f = color($edad);
?>

<html>
<head>
    <title>Resultado de Entrada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color:#<?=$color_f?>">
    <div class=".container">
        <h1>Página de respuesta</h1>
        <p><?=date("Y/m/d");?></p>
        <p>Su nombre es: <?=$nombre?></p>
        <p>Su edad es: <?=$edad?> años</p>
        <p>Descuento aplicado: <?=($descuento_aplicado * 100)?>%</p>
        <p>Precio final de la entrada: $<?=number_format($precio_final, 2)?></p>
    </div>
</body>
</html>
