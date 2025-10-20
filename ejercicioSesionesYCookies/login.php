<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $_SESSION['nombre'] = $_POST['nombre'];
        $nombreUsu = $_SESSION['nombre'];
        
        header('Location: http://localhost/proyectos/php-proyectos/ejercicioSesionesYCookies/welcome.php');
        exit;
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
    <form method="POST">
        <label>Nombre</label>
        <input name="nombre" type="text" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>