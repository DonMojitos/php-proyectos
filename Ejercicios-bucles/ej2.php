<!doctype html>
<head>
    <title>Ejercicios PHP: Cadenas de texto</title>
</head>
<body>

    <?php
        $sumaNueva=0;
        $contador = 0;
        while($sumaNueva < 1000){
            $sumaVieja = $sumaNueva;
            $sumaNueva += $contador;
            echo "<p> $sumaVieja + $contador = " . $sumaNueva . ".</p>";
            $contador++;
        }
    ?>

</body>
</html>