<!doctype html>
    <head>
        <title>Ejercicios PHP: Cadenas de texto</title>
        <style>
            table, tr, td{
                border: 2px solid black;
                border-collapse: collapse;
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <?php
            if(isset($_GET["n"])){
                $n = (int)$_GET["n"];
                $resul = 0;

                echo '<table>';

                for ($i=1; $i <= $n; $i++) { 
                    echo '<tr>';
                    for ($j=1; $j <= $n; $j++) { 
                        $resul = $i*$j;
                        
                        echo "<td>$i*$j=$resul</td>";
                    }
                    echo '<tr>';
                }
                echo '</table>';
            }else{
                echo '<p>Escribe un valor adecuado en la url</p>';
            }
        ?>
        

    </body>
</html>