<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $texto = $_POST['texto'];
        $contador = 0;
        $arrTexto = explode( ' ' , $texto);
        $arrAsociativo = [];
        foreach($arrTexto as $key => $palabra){
            $arrAsociativo["palabra_" . $contador] = $palabra;
            $contador++;
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
        var_dump($arrAsociativo);
        echo "</pre>";
    ?>
</body>
</html>