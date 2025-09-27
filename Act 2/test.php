<?php
    $radPeq = 10;
    $radMed = 15;
    $precio = 10;
    $resultadoPeq = (M_PI * $radPeq**2) * 2;
    $precioPeq = $precio / resultadoPeq;
    $resultadoMed = (M_PI * $radMed**2);
    $precioPeq = $precio / resultadoMed;
?>

<html>
    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <h1>Miercadona</h1>
        <h2>OFERTAS SIN SENTIDO</h2>
        <p><?="El precio por euro de una pizza pequeña es: " . $resultadoPeq?></p>
        <p><?="El precio por euro de una pizza mediana es: " . $resultadoMed?></p>
    </body>
</html>