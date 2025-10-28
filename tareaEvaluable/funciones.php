<?php
    require_once './catalogo_productos.php';

    
    
    $filtrado = array_filter($productos, function($producto) use ($campo, $valor) {
        return $producto[$campo] == $valor;
    });
?>