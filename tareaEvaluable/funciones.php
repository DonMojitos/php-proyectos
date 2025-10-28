<?php
    require_once './catalogo_productos.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $campo = $_POST['campo'];
        
        
        $valor = $_POST['criterio'];
        echo "<pre>" , print_r($_POST,true) , "</pre>";
        foreach ($productos as $producto) {
            echo $producto[$campo];
        }
        //echo "<pre>" , var_dump($productos) , "</pre>";
        function mostrarLista($productos, $key, $value){
            $productos[$key] = $value;
        }
        
    }
    
    $filtrado = array_filter($productos, function($producto) use ($campo, $valor) {
        return $producto[$campo] == $valor;
    });
?>