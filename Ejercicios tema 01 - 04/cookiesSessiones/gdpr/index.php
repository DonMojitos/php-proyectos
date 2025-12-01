<?php
    if(!isset($_COOKIE['tracker_actividad'])){
        setcookie('tracker_actividad', 0, time() + 60*60*24);
    }
    
    if(isset($_GET['consent']) && $_GET['consent'] == 'accept'){
        if(isset($_COOKIE['tracker_actividad'])){
            $valor = $_COOKIE['tracker_actividad'] + 1;
            setcookie('tracker_actividad', $valor, time() + 60*60*24);
        }
        header('Location: index.php');
    }

    if(isset($_COOKIE['tracker_actividad']) && $_COOKIE['tracker_actividad'] > 0){
        $valor = $_COOKIE['tracker_actividad'] + 1;
        setcookie('tracker_actividad', $valor, time() + 60*60*24);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio de Consentimiento GDPR</title>
    <style>
        body { font-family: sans-serif; padding-bottom: 150px; }
        .cookie-banner {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: #222;
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 -2px 5px rgba(0,0,0,0.2);
            z-index: 1000;
        }
        .cookie-banner p { margin: 0 0 15px 0; }
        .cookie-banner a.boton-aceptar {
            background: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    
    <h1>Bienvenido</h1>
    <p>Este es el contenido principal de la web.</p>
    <p>Recarga esta página (F5) para ver cómo funcionan las cookies.</p>

    <hr>

    <h2>Estado de Rastreo</h2>
    <?php if((int)$_COOKIE['tracker_actividad'] == 1):?>
        <p style="color: green;">
            <strong>Consentimiento: OTORGADO.</strong><br>
            Te estamos "rastreando". Has visitado esta página <?=$_COOKIE['tracker_actividad']?> vez desde que aceptaste.
        </p>
    
    <?php elseif((int)$_COOKIE['tracker_actividad'] > 1):?>
        <p style="color: green;">
            <strong>Consentimiento: OTORGADO.</strong><br>
            Te estamos "rastreando". Has visitado esta página <?=$_COOKIE['tracker_actividad']?> veces desde que aceptaste.
        </p>
    <?php else:?>
        <p style="color: red;">
            <strong>Consentimiento: PENDIENTE.</strong><br>
            NO te estamos "rastreando" (la cookie 'tracker_actividad' no se creará ni actualizará).
        </p>
    <?php endif ?>

    
    <?php if((int)$_COOKIE['tracker_actividad'] > 0):?>
        <div class="cookie-banner">
            <p>Gracias por aceptar nuestras cookies.</p>
        </div>
    <?php else:?>
        <div class="cookie-banner">
            <p>Usamos cookies para rastrear tu actividad y mejorar tu experiencia. ¿Aceptas?</p>
            <a href="index.php?consent=accept" class="boton-aceptar">Aceptar Cookies</a>
        </div>
    <?php endif ?>
</body>
</html>