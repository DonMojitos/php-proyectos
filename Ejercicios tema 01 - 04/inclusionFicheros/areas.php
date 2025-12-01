<?php
    
    function areaCuadrado($lado){
        return $lado*$lado;
    }
    function areaRectangulo($lado1, $lado2){
        return $lado1*$lado2;
    }
    function areaCirculo($radio){
        return M_PI*($radio**2);
    }
    function areaTriangulo($base, $altura){
        return ($base*$altura)/2;
    }
?>