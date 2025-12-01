<?php
    namespace Cadenas;
    function suma( $n1,  $n2){
        return $n1 . $n2;
    }
    function multiplicacion($texto,  $nRepes){
        $resultado = '';
        for ($i=0; $i < $nRepes; $i++) { 
            $resultado = $texto . $resultado;
        }
        return $resultado;
    }
?>