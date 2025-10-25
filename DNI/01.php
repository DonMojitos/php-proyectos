<?php 
    $name = 'Ivan Moreno Lopez';
    $DNI = '49478847';
    $letrasDNI = ['T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E'];
    $letra = $letrasDNI[$DNI % 23];
    $arrDNI = str_split($DNI);
    $censura = implode(str_replace($arrDNI, '*', $arrDNI));
    $censuraDNI = substr($DNI, 0, 2) . $censura . substr($DNI, -2) ;
    $ast = str_replace($DNI, '*', $DNI) ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DNI 0.1</title>
</head>
<style>
    html{font-family: 'Arial';}
</style>
<body>
    <p>Longitud de la variable $name: <?= strlen($name) . ' caracteres'?></p>
    <p>Extrar y mostrar mi nombre completo: <?= $name?></p>
    <p>Extrar y mostrar DNI + letra: <?= $DNI . $letra?></p>
    <p>Mostrar los 2 primeros y los 2 últimos dígitos de tu DNI/NIE (sin letra), sustituyendo el resto por '*': <?php echo $censuraDNI?></p>
</body>
</html>