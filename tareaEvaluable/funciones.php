<?php
    function menorQue($productos, $campo, $criterio) {
        $resultado = [];
        foreach ($productos as $producto) {
            if ((float)$producto[$campo] < (float)$criterio) {
                $resultado[] = $producto;
            }
        }
        return $resultado;
    }
    function mayorQue($productos, $campo, $criterio) {
        $resultado = [];
        foreach ($productos as $producto) {
            if ((float)$producto[$campo] > (float)$criterio) {
                $resultado[] = $producto;
            }
        }
        return $resultado;
    }
    function igualQue($productos, $campo, $criterio) {
        $resultado = [];
        foreach ($productos as $producto) {
            if ((float)$producto[$campo] == (float)$criterio) {
                $resultado[] = $producto;
            }
        }
        return $resultado;
    }
    
    function filtros($productos, $campo, $criterio, $tipo){
        if($campo == 'sinCampo' && $tipo == 'sinFiltro' && $criterio == ''){
            return $productos;
        }
        switch ($tipo) {
            case 'igual':
                return igualQue($productos, $campo, $criterio);
                break;

            case 'contiene':
                    
                break;

            case 'mayor':
                
                return mayorQue($productos, $campo, $criterio);
                break;
                
            case 'menor':
                return menorQue($productos, $campo, $criterio);
                break;
            default:
                return $productos;
                break;
        }
        
    }
?>