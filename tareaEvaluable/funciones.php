<?php
    $productos = require_once './catalogo_productos.php';

    //Funciones
    function menorQue($productos, $campo, $criterio){
        $resultado = [];
        echo'hola 2';
        foreach ($productos as $producto) {
            echo'hola4';
            if (isset($producto[$campo]) && (float)$producto[$campo] < (float)$criterio) {
                echo'hola3';
                $resultado[] = $producto;
                print_r($resultado,true);
            }
        }

        return $resultado;
    }
    //Comprobar si se ha conectado
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        $filtroCampo = $_POST['filtroCampo'];
        $filtroTipo = $_POST['filtroTipo'];
        $criterio = (float)$_POST['criterio'];

        switch ($filtroTipo) {
            case 'igual':
                echo'igual';
                break;

            case 'contiene':
                echo'contiene';
                break;

            case 'mayor':
                echo'mayor';
                break;

            case 'menor':
                echo'hola';
                menorQue($productos, $filtroCampo, $criterio);
                break;
        }
    }
?>