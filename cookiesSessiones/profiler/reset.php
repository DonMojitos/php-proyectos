<?php
    $intereses_guardados = [
            "deportes" => 0,
            "tecnologia" => 0,
            "cocina" => 0
    ];
    setcookie('perfil-intereses', json_encode($intereses_guardados), time() + (60*60*24)); 
    header('Location: ./index.php');
    exit;
?>