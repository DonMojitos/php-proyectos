<?php
    $nombreCompleto = 'Iván Moreno López';
    $DNINoLetra = '52814351';
    $nombreArr = explode(" ",$nombreCompleto);
    $nombreUnico = $nombreArr[0];
    $nombreCompuesto = $nombreArr[0] . " " . $nombreArr[1];
    $arrLetras = ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"];
    $primerParDigitos = substr($DNINoLetra, 0, 2);
    $ultimoParDigitos = substr($DNINoLetra, 6, 2);
    $DNICensurado = $primerParDigitos . "****" . $ultimoParDigitos;
    $vocales = ['a', 'e', 'i', 'o', 'u','A', 'E', 'I', 'O', 'U','á', 'é', 'í', 'ó', 'ú','Á', 'É', 'Í', 'Ó', 'Ú'];
    $nombreNoVocales = str_replace($vocales, '*', $nombreCompleto);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DNI Ejercicio</title>
    </head>
    <body>
        <h1>Contenido del Ejercicio</h1>
    <!--Ejercicio 1-->
        <p>Mostrar la longitud de tu nombre completo => <?= "<b>Nombre:</b> $nombreCompleto." ?> <?= ' <b>Longitud: </b>' . strlen($nombreCompleto) . ' caracteres.'?></p>
    <!--Ejercicio 2-->
        <?php 
            echo '<form action="index.php" method="post">
                <label>¿Tu nombre es simple o compuesto?:</label><br>
                <input type="text" name="tipoNombre">
                <button type="submit">Enviar</button>
            </form>'
        ?>
        <?php
            if (isset($_POST['tipoNombre'])) {
                $tipo = strtoupper($_POST['tipoNombre']);

                if ($tipo === "SIMPLE") {
                    echo 'Tu nombre es: ' . $nombreUnico;
                } elseif ($tipo === "COMPUESTO") {
                    echo 'Tu nombre es: ' . $nombreCompuesto;
                } else {
                    echo "Error! Opción no válida.";
                }
            } else {
                echo "Tienes que rellenar este formulario para obtener tu nombre.";
            }
        ?>
    <!--Ejercicio 3-->
        <p>Tu DNI es: <?= $DNINoLetra ?></p>
        <?php
            $posicionLetra = (int)$DNINoLetra % 23;
            $letra = $arrLetras[$posicionLetra];
            $DNI = $DNINoLetra . $letra;
            echo "<p>Tu letra es:  $letra.</p>";
            echo "<p>Por lo que tu DNI es: $DNI</p>"
        ?>
    <!--Ejercicio 4-->
        <p>Tu DNI es: <?= $DNINoLetra ?></p>
        <?= "DNI censurado = $DNICensurado."?>
    <!--Ejercicio 5-->
        <p>Tu nombre es: <?= $nombreCompleto?></p>
        <p>Nombre sin vocales: <?= $nombreNoVocales . '.'?></p>
    </body>
</html>
