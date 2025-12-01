<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        require_once 'Entrada.php';

        $titulo = $_POST['titulo'];
        $contenido = $_POST['contenido'];

        $entrada = new Entrada($titulo, $contenido);

        $entrada->save();
        header("Location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear entrada</title>
</head>
<body>
    <form method="POST">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" id="titulo"required><br>
        <label for="contenido">Contenido:</label>
        <textarea name="contenido" id="contenido"required></textarea><br>
        <input type="submit" value="Guardar Entrada">
    </form>
</body>
</html>