<!DOCTYPE html>
<html>
<head>
<title>Mi Primera Página Dinámica</title>
</head>
<body>
<h1>¡Hola Mundo desde el Servidor!</h1>
<?php
    echo "<p><strong>Fecha y hora del servidor:</strong> " . date(`d/m/Y H:i:s`) . "</p>";
    echo "<p><strong>Tu navegador es:</strong> " . $_SERVER[`HTTP_USER_AGENT`] . "</p>";
    echo "<p><strong>Tu IP es:</strong> " . $_SERVER[`REMOTE_ADDR`] . "</p>";
?>
<p>Esta página fue generada dinámicamente en el servidor.</p>
</body>
</html>