<!doctype html>
<head>
    <title>Ejercicios PHP: Cadenas de texto</title>
</head>
<body>

    <?php
        $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

        foreach($meses as $mes){
            echo "<h2>$mes</h2>";
        }
    ?>

</body>
</html>