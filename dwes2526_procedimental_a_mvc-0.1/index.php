<?php
    require_once 'EntradaController.php';

    $controller = new EntradaController();
    
    $action = $_GET['action'] ?? 'mostrarEntradas';

?>