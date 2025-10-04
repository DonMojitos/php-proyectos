
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

        $timespan = mktime(0, 0, 0, 9, 17, 2013);
        $resta = $tiempoActual - $timespan;
        $diasTrans = $resta/86400;   
        $mesTrans = $resta/2629743;   
        $aniosTrans = $resta/31556926;   
        
        echo "<p>Desde la salida del GTA V han pasado: $diasTrans dias, $mesTrans meses y $aniosTrans años.</p>";

        $tiempoFuturo = mktime(0, 0, 0, $mesActual + 100, $diaActual + 100, $yearActual + 100);
        $fechaFuturo = date('Y-m-d', $tiempoFuturo);
        $diaFuturo = date('D', $tiempoFuturo);
        echo "<p>En 100 dias, 100 meses y 100 años será: $fechaFuturo y dia: $diaFuturo.</p>";
    ?>
</body>
</html>