<?php
    /*Crea funciones de las 4 operacioens aritméticas básicas: suma, resta, multiplicación y
    división. Crea un array asociativo que asocie el nombre de la operación con el nombre
    de la función. Queremos llamar a estas funciones utilizando ADD, SUB, MUL y DIV,
    respectivamente. Utiliza la variable superglobal $_GET para obtener de la URL 2
    números y el nombre de la operación a realizar. Utiliza la referencia a la función para
    realizar la operación y mostrar el resultado.
    Ejemplo de URL:
    http://localhost/mi_script.php?num1=10&num2=5&operacion=ADD
    En nuestro código, habrá una relación clave-valor en el array asociativo como esta:
    add => suma */
    $arrFunciones = [   
        'add' => 'suma',
        'sub' => 'resta',
        'mul' =>'multiplicacion',
        'div' => 'division'
    ];

    if(isset($_GET["n1"] , $_GET["n2"] , $_GET["operacion"])){
        $n1 = (int)$_GET["n1"];
        $n2 = (int)$_GET["n2"];

        $operacion = strtolower($_GET["operacion"]);
        
        echo '<p>' . $arrFunciones[$operacion]($n1, $n2) . '</p>';

        foreach ($arrFunciones as $key => $value) {
            if($operacion == $key){
                echo '<p>' . $value($n1, $n2) . '</p>';
            }
        }
    }

    function suma($n1, $n2){
        return $n1 + $n2;
    }
    function resta($n1, $n2){
        return $n1 - $n2;
    }
    function multiplicacion($n1, $n2){
        return $n1 * $n2;
    }
    function division($n1, $n2){
        if(($n2 === 0) || ($n1 === 0)){
            return -1;
        }
        return $n1 / $n2;
    }
    
?>
