<?php
    if(!isset($intereses_guardados)){
        $intereses_guardados = [
            "deportes" => 0,
            "tecnologia" => 0,
            "cocina" => 0
        ];
    }

    if(!isset($_COOKIE['perfil-intereses'])){
        setcookie('perfil-intereses', json_encode($intereses_guardados), time() + (60*60*24));
    }
    
    if(isset($_COOKIE['perfil-intereses'])){
        $intereses_guardados = json_decode($_COOKIE['perfil-intereses'], true);
        
    }
    

    $categoria_favorita = null;
    

    if ($intereses_guardados['deportes'] > 0 || $intereses_guardados['tecnologia'] > 0 || $intereses_guardados['cocina'] > 0) {
        
        asort($intereses_guardados, SORT_NUMERIC);

        $intereses = array_keys($intereses_guardados);      

        $recomendacion = 'Vemos que te interesa mucho la categoría de <strong>' . $intereses[2] . '</strong>. ¡Aquí tienes más!';
        
        $categoria_favorita = $intereses[2];

    }else{
        $recomendacion = "Navega por la web para ver recomendaciones";
    }
?>

<!DOCTYPE html>
<html>
<head><title>Portal de Noticias</title></head>
<body style="font-family: sans-serif;">

    <h1>Nuestro Portal</h1>
    
    <div style="background: #eee; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
        <h3>Recomendado para ti</h3>
        <p><?= $recomendacion; ?></p>
        <?php if ($categoria_favorita): ?>
            <a href="articulo.php?categoria=<?= $categoria_favorita; ?>">
                Ver más de <?= $categoria_favorita; ?>
            </a>
        <?php endif; ?>
    </div>
    
    <h2>Artículos Disponibles</h2>
    <ul>
        <li><a href="articulo.php?categoria=deportes">Artículo de Deportes</a></li>
        <li><a href="articulo.php?categoria=tecnologia">Artículo de Tecnología</a></li>
        <li><a href="articulo.php?categoria=cocina">Artículo de Cocina</a></li>
    </ul>

    <hr>
    <a href="reset.php">(Borrar mi perfil de intereses)</a>
</body>
</html>