<?php
    echo '<h2>Ejercicio 1</h2>';

    $frase = "Es el vecino el que elige al alcalde y es el alcalde el que quiere que sean los vecinos el alcalde";
    $arrFrase = explode(' ', $frase);
    echo "<pre>" , print_r($arrFrase, true),"</pre>";

    echo '<h2>Ejercicio 2</h2>';

    $paises = ['España', 'Marruecos', 'Rusia', 'Japón', 'Alemania'];
    echo $paises[2];

    echo '<h2>Ejercicio 3</h2>';

    $alumno = ['Nombre' => 'Jose Germán', 'Apellidos' => 'Veizaga Panozo', 'edad' => 23, 'nre' => 1201394329];
    echo $alumno['Apellidos'];

    echo '<h2>Ejercicio 4</h2>';

    $USDDivisa = ['eu' => 0.86, 'pound' => 0.74, 'solesPeruanos' => 3.46];
    $valor = 6253;
    echo "<p>Si tengo \$$valor cuantos euros tengo?</p>";
    $conversion = $valor * $USDDivisa['eu'];
    echo "<p>La conversion de dolares a euros es: $conversion euros</p>";
    $conversion = $valor/$USDDivisa['eu'];
    echo "<p>La conversion de euros a dolares es: \$$conversion</p>";
?>