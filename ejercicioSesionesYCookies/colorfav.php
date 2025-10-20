<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $color = $_POST['color'];
        setcookie('color', $color, time() + (60*60*24*30));
        header('Location: colorfav.php');
    }
    if(isset($_COOKIE['color'])){
        $favColor = $_COOKIE['color'];
    }else{
        echo "<p>No Habia ningun color seleccionado anteriormente.</p>";
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
    <form method="post">
        <label>Eligue un color</label>
        <input name="color" type="color">
        <input type="submit">
    </form>

    <?= "<p>Tu color seleccionado es: " . $favColor . "</p>"; ?>
</body>
</html>