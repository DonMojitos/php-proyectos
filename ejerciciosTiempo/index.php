
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $horaActual = date('h');
        $diaActual = date('d');
        $mesActual = date('m');
        $yearActual = date('Y');
        $dias_totales = (int)10000/3;
        $resto_horas = 10000%3;
        $tiempoActual = mktime(0, 0, 0, $mesActual, $diaActual, $yearActual);
        $fechaFutura = mktime($horaActual + $resto_horas, 0, 0, $mesActual, $diaActual + $dias_totales, $yearActual);
        $fechaActual = date('d/m/Y', $tiempoActual);
        $fechaExperto = date('d/m/Y', $fechaFutura);

        echo "<p>Serás un experto el $fechaExperto</p>";

        $timespan = mktime(0, 0, 0, 9, 17, 2013);
        $resta = $tiempoActual - $timespan;
        $diasTrans = $resta/86400;   
        $mesTrans = $diasTrans/30;   
        $aniosTrans = $mesTrans/12;   
        $aniosTrans = (int) ($mesTrans/12);
        $mesTrans = (int) ($mesTrans%12);
        $diasTrans = (int) ($diasTrans % 30);
        
        echo "<p>Desde la salida del GTA V han pasado: $diasTrans dias, $mesTrans meses y $aniosTrans años.</p>";


        $tiempoFuturo = mktime(0, 0, 0, $mesActual + 100, $diaActual + 100, $yearActual + 100);
        $fechaFuturo = date('Y-m-d', $tiempoFuturo);
        $diaFuturo = date('l', $tiempoFuturo);
        echo "<p>En 100 dias, 100 meses y 100 años será: $fechaFuturo y dia $diaFuturo.</p>";
    ?>
</body>
</html>