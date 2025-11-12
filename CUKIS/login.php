<?php 
    require_once './usuarios.php';

    session_start();

    if(isset($_SESSION['id_usuario'])){
        header('Location: ./index.php');
        exit;
    }

    if(isset($_COOKIE['recordarme'])){
        header('Location: ./index.php');
        exit;
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre_usuario = $_POST['name'] ?? '';
        $usuario = $usuarios[$nombre_usuario] ?? null;
        
        
        
        if($usuario && $_POST['pwd'] == $usuario['pwd']){
            $_SESSION['id_usuario'] = $usuario['id'];
            header('Location: ./index.php');
            exit;
        }else{
            echo 'error';
            
        }
        
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
    <form method="POST">
        <label for="name">Usuario:</label>
        <input type="text" name="name" value="<?=htmlspecialchars($nombre_usuario)?>"><br>
        <label for="pwd">Contraseña:</label>
        <input type="password" name="pwd" value="uwu"><br>
        <input type="checkbox" name="recordar" >
        <label for="recordar">Recordarme</label><br>
        <input type="submit">
    </form>
</body>
</html>