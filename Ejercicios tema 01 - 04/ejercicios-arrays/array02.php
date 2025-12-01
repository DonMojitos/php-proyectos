<?php

    echo '<h2>Ejercicio 1</h2>';

    $alumno = [['Nombre' => 'Jose Germán', 'Apellidos' => 'Veizaga Panozo', 'edad' => 23, 'nre' => 1201394329], ['Nombre' => 'Iván', 'Apellidos' => 'Moreno', 'edad' => 21, 'nre' => 123415], ['Nombre' => 'Frenk', 'Apellidos' => 'Soto', 'edad' => 11, 'nre' => 23523943212]];
    echo $alumno[2]['edad'];

    echo '<h2>Ejercicio 2</h2>';

    $matriz = [
            [1,2,3],
            [4,5,6], 
            [7,8,9]
            ];
    $determinante = $matriz[0][0]*(($matriz[1][1]*$matriz[2][2])-($matriz[2][1]*$matriz[1][2])) - $matriz[0][1]*(($matriz[1][0]*$matriz[2][2])-($matriz[2][0]*$matriz[1][2])) + $matriz[0][2]*(($matriz[1][0]*$matriz[2][1])-($matriz[2][0]*$matriz[1][1]));
    echo $determinante;
?>