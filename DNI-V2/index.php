<?php
    const INPUTDATA = 'Z8656215D';
    const ARRAYLETRAS = ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"];
    const NIE = 'NIE';
    const DNI = 'DNI';

    $caracterRecogido = substr(INPUTDATA, 0, 1);
    $resolTipo = $caracterRecogido != '0' && (int)$caracterRecogido <= 0 ? NIE : DNI;//SIRVE PARA CUALQUIER LETRA PERO ESTO NO NOS INTERESA EN ESTE CASO
    $txtValido = $resolTipo . ' VÁLIDO.';
    $txtNoValido = $resolTipo . ' NO VÁLIDO.';

    if($resolTipo == NIE){
        if($caracterRecogido == 'X'){
            $valorXYZ = 0;
        }else if ($caracterRecogido == 'Y'){
            $valorXYZ = 1;
        }else if ($caracterRecogido == 'Z'){
            $valorXYZ = 2;
        }
        
        $datoNumerico = $valorXYZ . (int)substr(INPUTDATA, 1, 7);
        $ultimoCaracter = substr(INPUTDATA, -1, 1);
        $resto = $datoNumerico % 23;

        $esValido = $ultimoCaracter == ARRAYLETRAS[$resto] ? $txtValido : $txtNoValido; /*Forma ternaria del if de abajo*/
        /*if($ultimoCaracter == ARRAYLETRAS[$resto]){ 
            echo 'Es valido';
        }else{
            echo 'No es valido';
        }*/
    }else if($resolTipo == DNI){
        $ultimoCaracter = substr(INPUTDATA, -1, 1);
        $datoNumerico = (int)substr(INPUTDATA, 0, 8);
        $resto = $datoNumerico % 23;
        $esValido = $ultimoCaracter == ARRAYLETRAS[$resto] ? $txtValido : $txtNoValido;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .verde, .rojo{
            font-weight: bold;
        }
        .verde{
            color: green;
            
        }
        .rojo{
            color: red;
        }
    </style>
</head>
<body>
    <h1>PRUEBA DE VALIDACIÓN</h1>

    <h2>El tipo de documento que se ha presentado es un <?= $resolTipo . ' cuyo valor es: ' . INPUTDATA . '.' ?></h2>
    <?php
        if($esValido == $txtValido){
            echo "<p class = \"verde\">$txtValido</p>";
        }else if($esValido == $txtNoValido){
            echo "<p class = \"rojo\">$txtNoValido</p>";
        }
    ?>
</body>
</html>