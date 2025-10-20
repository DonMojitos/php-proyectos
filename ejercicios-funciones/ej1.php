<?php

    function esPar($n){
        $resultado = $n % 2 == 0 ? true : false;
        return $resultado;
    }

    function sumarPares($arr){
        $suma = 0;
        for ($i=0; $i < sizeof($arr); $i++) { 
            if($arr[$i] % 2 == 0){
                $suma += $arr[$i];
            }
        }
        return $suma;
    }

    function elMasJoven($arr){
        $aluMasJoven = $arr[0];
        foreach ($arr as $alu) {
            if($alu['edad'] < $aluMasJoven['edad']){
                $aluMasJoven = $alu;
            }
        }
        $resultado = "<p>El alumno mas joven es " . $aluMasJoven['nombre'] . ' con una edad de: ' . $aluMasJoven['edad'];
        return $resultado;
    }

    function eliminarMenores(&$arr){
        $seEliminaron = false;

        foreach ($arr as $key => $alu) {
            if($alu["edad"] < 18){
                unset($arr[$key]);
                $seEliminaron = true;
            }
        }

        return $seEliminaron;
    }

    function esPrimo($n){
        $esPrimo = false;

        if($n < 2){
            return $esPrimo;
        }

        for ($i=2; $i <= $n; $i++) { 
            if($n%$i == 0){
                echo "da falso";
                $esPrimo = false;
                return $esPrimo;
            }else{
                $esPrimo = true;
                return $esPrimo;
            }
        }

        return $esPrimo;
    }

    function listarPrimos($n){
        $lista = [];

        for ($i=0; $i < $n; $i++) { 
            if(esPrimo($n)){
                array_push($lista, $n);
            }
        }
        

        return var_dump($lista);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><strong>Ejercicio 1:</strong> Crea una función que reciba un número y devuelva true si es par o false si es impar.</p>

    <?php
        var_dump(esPar(3)); 
    ?>

    <p><strong>Ejercicio 2:</strong> Crea una función que reciba un array de números y devuelva la suma de todos sus elementos pares.</p>

    <?php
        $arrNum = [1,2,3,4,5,6,7,8,9,5,3,23,12,1,54];
        echo sumarPares($arrNum); 
    ?>

    <p><strong>Ejercicio 3:</strong> Crea una función que reciba un array asociativo con los datos de varios alumnos (nombre, apellidos, edad, nre) y devuelva el alumno más joven.</p>

    <?php
        $alu1 = ['nombre' => 'Ivan', "edad" => 24];
        $alu2 = ['nombre' => 'Jose', "edad" => 53];
        $alu3 = ['nombre' => 'Laura', "edad" => 19];
        $alu4 = ['nombre' => 'Mario', "edad" => 11];
        $alu5 = ['nombre' => 'David', "edad" => 64];
        $alu6 = ['nombre' => 'Lolamento', "edad" => 7];
        $arrAlum = [$alu1, $alu2, $alu3, $alu4, $alu5, $alu6];
        echo elMasJoven($arrAlum); 
    ?>

    <p><strong>Ejercicio 4:</strong> Crea una función que reciba un array asociativo con los datos de varios alumnos (nombre,apellidos, edad, nre). Debe eliminar a aquellos que sean menores de edad y devolver un booleano que indique si hizo alguna eliminación o no.</p>

    <?php
        $alu1 = ['nombre' => 'Ivan', "edad" => 24, "nre" => 1234125];
        $alu2 = ['nombre' => 'Jose', "edad" => 53, "nre" => 2234125];
        $alu3 = ['nombre' => 'Laura', "edad" => 19, "nre" => 3234125];
        $alu4 = ['nombre' => 'Mario', "edad" => 11, "nre" => 4234125];
        $alu5 = ['nombre' => 'David', "edad" => 64, "nre" => 5234125];
        $alu6 = ['nombre' => 'Lolamento', "edad" => 7, "nre" => 6234125];
        $arrAlum = [$alu1, $alu2, $alu3, $alu4, $alu5, $alu6];
        echo eliminarMenores($arrAlum); 
    ?>
    <p><strong>Ejercicio 6:</strong> Devuelve primos kbron</p>

    <?php
        listarPrimos(2); 
    ?>
    
    
</body>
</html>