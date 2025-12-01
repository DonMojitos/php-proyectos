<?php
    session_start();

    if(isset($_SESSION['contador'])){
        $_SESSION['contador']++;
    }else{
        $_SESSION['contador'] = 1;
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $_SESSION['contador'] = 0;
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
    <h1>Bienvenido al contador de visitar.</h1>

    <p>El numero de veces que has visitado esta pagina es: <?php echo $contador = $_SESSION['contador']?> </p>

    <form method="POST">

        <input type="submit" value="Resetear">
    </form>



</body>
</html>