<?php 
session_start();
    if(!isset($_SESSION['id_usuario'])){
        header('Location: ./login.php');
        exit;
    }
    $id = $_SESSION['id_usuario'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenido</title>
</head>
<body>
    <h1>Bienvenido, Usuario <?= $id ?></h1>
    <p>Contenido exclusivo.</p>
    <form action="./logout.php">
        <input type="submit" value="Cerrar Sesión" >
    </form>
</body>
</html>