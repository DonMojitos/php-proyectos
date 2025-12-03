<?php
    $action = $_GET['action'] ?? 'filtrarPais';

    switch ($action) {
        case 'index':
            echo "Bienvenido a mi super mega chachi pistachi página web";
            break;
        case 'filtrarPais':
            $campo = $_GET['campo'] ?? 'continente';
            $valor = $_GET['valor'] ?? '';
            require_once "controller/paises_controller.php";
            $paises = filtrar_pais($campo, $valor);
            require "view/vista_paises.php";
            break;
        case 'filtrarPais2':
            $campo = $_GET['campo'] ?? 'continente';
            $valor = $_GET['valor'] ?? '';
            require_once "controller/paises2_controller.php";
            $paises = filtrar_pais($campo, $valor);
            require "view/vista_paises.php";
            break;
        case 'addPais':
            $continente = $_GET['continente'] ?? 'Europa';
            $pais = $_GET['pais'] ?? 'España';
            require_once "controller/paises_controller.php";
            $paises = addPais($continente, $pais);
            require "view/vista_paises.php";
            break;
    }

?>
