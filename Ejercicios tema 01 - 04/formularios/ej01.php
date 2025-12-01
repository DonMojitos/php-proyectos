
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="nombre">Nombre</label>
        <input name="nombre" type="text" required>
        <label for="apellidos">Apellidos</label>
        <input name="apellidos" type="text" required>
        <label for="edad">Edad</label>
        <input name="edad" type="number">
        <label for="nre">NRE</label>
        <input name="nre" type="number" required>
        <input type="submit" value="Enviar">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $nre = $_POST['nre'];
            echo "<p>Bienvenido $nombre $apellidos con NRE: $nre.</p>";
        }
    ?>
</body>
</html>