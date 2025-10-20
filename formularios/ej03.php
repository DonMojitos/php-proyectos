<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $texto = $_POST['texto'];
        $arrTexto = explode(' ', $texto);
        $arrAsociativo = [];
        foreach($arrTexto as $palabra){
            if(key_exists($palabra,$arrAsociativo)){ 
                $arrAsociativo[$palabra] = 1 + $arrAsociativo[$palabra];
            }else{
                $arrAsociativo[$palabra] = 1;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>Introduce texto:</label>
        <textarea name="texto" required></textarea>
        <input type="submit" value="Enviar">
    </form>
    <?php
        echo "<pre>";
        print_r($arrAsociativo);
       
        echo "</pre>";
    ?>
</body>
</html>