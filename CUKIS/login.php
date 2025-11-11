<?php 
    require_once './CUKIS/usuarios.php';

    if(session_status() !== PHP_SESSION_ACTIVE){
        session_start();
    }

    if(isset($_SESSION['id_usuario'])){
        header('Location: ./index.php');
    }

    if(isset($_COOKIE['recordarme'])){
        header('Location: ./index.php');
    }

    if($_SERVER['REQUEST_METHOD'] === $_POST){
        $usuario = $_POST['name'];
        $pwd = $_POST['pwd'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
</head>
<body>
    <h1>Bienvenido al Log-in.</h1>
    <form method="post">
        <label for="name">Usuario:</label>
        <input type="text" name="name"><br>
        <label for="pwd">Contraseña:</label>
        <input type="text" name="pwd"><br>
        <input type="checkbox" name="recordar" >
        <label for="recordar">Recordarme</label><br>
        <input type="submit">
    </form>
</body>
</html>