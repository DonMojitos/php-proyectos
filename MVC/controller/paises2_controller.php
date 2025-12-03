<?php
    require_once __DIR__ . "/../model/paises2.php";

    function filtrar_pais($campo, $valor) {
        global $paises;
        return array_filter($paises, fn($pais) => !$valor || $pais[$campo] == $valor);
    }
?>