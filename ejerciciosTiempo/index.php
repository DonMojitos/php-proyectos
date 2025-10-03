
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $diaActual = date('d');
    $mesActual = date('m');
    $yearActual = date('Y');
    $tiempoActual = mktime(0, 0, 0, $mesActual, $diaActual, $yearActual);
    $fechaActual = date('d/m/Y', $tiempoActual);

    $segundos = mktime(10000, 0, 0, $mesActual, $diaActual, $yearActual);
    $fechaExperto = date('d/m/Y', $segundos);

    echo "<p>Serás un experto el $fechaExperto</p>";

    $dia = date(17);
    $mes = date(9);
    $year = date(2013);


    $timespan = mktime(0, 0, 0, $mes, $dia, $year);
    $fecha = date('d/m/Y', $timespan);
    $tiempoTrans = $tiempoActual - $timespan; 
    $tiempoPasado = mktime(0, 0, $tiempoTrans, $mes, $dia, $year);
    $tiempoSalida = date('d/m/Y', $tiempoPasado);

    echo "<p>Desde la salida del GTA V han pasado: $tiempoSalida </p>";

    ?>
</body>
</html>