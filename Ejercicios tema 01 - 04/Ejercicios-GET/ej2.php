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

            for ($i=1; $i <= $num; $i++) { 
                if($i % 2 == 0){
                    echo "<p>$i</p>";
                }   
            }
        }else{
            echo '<p>No se ha declarado un valor a $num.</p>';
        }
    ?>
</body>
</html>