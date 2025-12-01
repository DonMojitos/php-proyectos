<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <?php
        if(isset($_GET["num"])){
            $num = (int)$_GET["num"];

            switch ($num) {
                case 0:
                case 1:
                case 2:
                case 3:
                case 4:
                    echo '<p>Insuficiente</p>';
                    break;
                case 5:
                    echo '<p>Suficiente</p>';
                    break;
                case 6:
                    echo '<p>Bien</p>';
                    break;
                case 7:
                case 8:
                    echo '<p>Notable</p>';
                    break;
                case 9:
                case 10:
                    echo '<p>Sobresaliente</p>';
                    break;
                default:
                    echo '<p>Inserta un numero válido.</p>';
                    break;
            }
        }else{
            echo '<p>No se ha declarado un valor a $num.</p>';
        }
    ?>
</body>
</html>