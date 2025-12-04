<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear entrada</title>
</head>
<body>
    <h1>Crear nueva entrada al Blog</h1>
    <form method="POST" action="index.php?action=guardarEntrada">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
        <br>
        <label for="contenido">Contenido:</label>
        <textarea id="contenido" name="contenido" required></textarea>
        <br>
        <input type="submit" value="Guardar Entrada">
    </form>
</body>
</html>