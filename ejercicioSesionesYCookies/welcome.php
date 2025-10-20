<?php
    session_start();
    
    $nombreUsu = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : 'Invitado';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido <?= $nombreUsu?>.</h1>
    <a href="logout.php">Cerrar Sesion</a>
</body>
</html>