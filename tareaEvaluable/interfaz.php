<?php
    require './catalogo_productos.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea Evaluable</title>
    <style>
        table, td, tr, th{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <form action="./funciones.php" method="post">
        <?php
            foreach ($productos as $key => $producto) {
                foreach ($producto as $campo => $value) {
                    //var_dump($productos[$key][$campo]);
                    echo $campo;
                }
                  
            }
            
        ?>
        <table>
            <?php foreach ($productos as $key => $producto):?>
                <?php foreach ($producto as $campo => $value):?>
                    <tr>
                        <th>
                            <td><?= $campo ?></td>
                        </th>
                        <td>
                            <td><?= $value ?></td>
                        </td>
                    </tr>
                <?php endforeach;?>  
            <?php endforeach;?>
            
        </table>
        <label>Campos a seleccionar: </label>
        <input type="checkbox" name="campo[]" value="id">
        <label for="id">ID</label>
        <input type="checkbox" name="campo[]"  value="nombre">
        <label for="nombre">Nombre</label>
        <input type="checkbox" name="campo[]"  value="categoria">
        <label for="categoria">Categoria</label>
        <input type="checkbox" name="campo[]"  value="stock">
        <label for="stock">Stock</label>
        <input type="checkbox" name="campo[]"  value="precio">
        <label for="precio">Precio</label>
        <br>
        <label>Campo a filtrar:</label>
        <select name="filtroCampo">
            <option value="sinCampo">Sin campo</option>
            <option value="id">ID</option>
            <option value="nombre">Nombre</option>
            <option value="categoria">Categoria</option>
            <option value="stock">Stock</option>
            <option value="precio">Precio</option>
        </select>
        <br>
        <label>Tipo de filtrado:</label>
        <select name="filtroTipo">
            <option value="sinFiltro">Sin filtrado</option>
            <option value="igual">Igual a</option>
            <option value="contiene">Contiene</option>
            <option value="mayor">Mayor que</option>
            <option value="menor">Menor que</option>
        </select>
        <br>
        <label>Criterio:</label>
        <textarea name="criterio"></textarea>
        <input type="submit">

    </form>
</body>
</html>