<?php
    // Destruir sesión y eliminar cookie
    ### Completar código aquí ###
    
    session_start();
    session_unset();
    session_destroy();
    if($_COOKIE['token_recordarme'] == 'NULL'){
        setcookie('token_recordarme', 0, -time());
    }
    
    header('Location: login.php');
    exit;
?>