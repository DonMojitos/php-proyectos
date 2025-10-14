<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <?php
        if(isset($_GET["edad"])){
            $edad = (int)$_GET["edad"];
            
            if($edad < 18){
                echo "<p>Es menor de edad.</p>";
            }else if($edad >= 65){
                echo "<p>Está jubilado.</p>";
            }else{
                echo "<p>Es mayor de edad.</p>";
            }
        }
    ?>
</body>
</html>