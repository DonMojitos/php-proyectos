<?php
    require_once __DIR__ . "/../model/paises.php";

    function filtrar_pais($campo, $valor) {
        global $paises;
        return array_filter($paises, fn($pais) => !$valor || $pais[$campo] == $valor);
    }

    function addPais($continente, $pais) {
        global $paises;
        array_push($paises, [
            'nombre' => $pais,
            'continente' => $continente
        ]);
        return $paises;
    }
?>