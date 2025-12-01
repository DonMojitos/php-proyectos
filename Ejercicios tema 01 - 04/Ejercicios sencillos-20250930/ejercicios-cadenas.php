<!doctype html>
<head>
    <title>Ejercicios PHP: Cadenas de texto</title>
</head>
<body>

    <h1>Ejercicios sobre operaciones con cadenas de texto (PHP)</h1>

    <p>Implementa las soluciones en este mismo archivo dentro de las secciones PHP indicadas.</p>

    <section>
        <h2>Ejercicio 1 — Concatenación y formato</h2>
        <p>Declara varias variables de tipo string (nombre, apellido, ciudad) y:</p>
        <ul>
            <li>Concaténalas con distintos métodos (operador ., interpolación doble comillas).</li>
        </ul>

        <?php
            $name = 'Ivan';
            $apelidos = 'Moreno Lopez';
            $ciudad = 'Murcia';

            echo 'Mi nombre es ' . $name . ' ' . $apelidos . " y vivo en $ciudad.";
        ?>

    </section>

    <section>
        <h2>Ejercicio 2 — Longitud, mayúsculas/minúsculas y recorte</h2>
        <p>Usa funciones para:</p>
        <ul>
            <li>Calcular la longitud de una cadena con `strlen`.</li>
            <li>Convertir a mayúsculas y minúsculas (`strtoupper`, `strtolower`).</li>
            <li>Recortar espacios en los extremos con `trim` y mostrar el antes/después.</li>
        </ul>

        <?php
            $txt = '     Abunda la kk  ';
            
            echo  'Longitud: ' . strlen($txt) . ' TODO MAYUS: ' . strtoupper($txt)  . ' todo minus: ' . strtolower($txt);
            $txtClean = trim($txt);
            echo "Cadena sin tratar: $txt. Cadena tratada: $txtClean";
        ?>

    </section>

    <section>
        <h2>Ejercicio 3 — Búsqueda y reemplazo</h2>
        <p>Realiza operaciones de búsqueda y sustitución:</p>
        <ul>
            <li>Comprobar si una subcadena existe dentro de una cadena (`strpos` o `str_contains`).</li>
            <li>Reemplazar una palabra por otra usando `str_replace`.</li>
            <li>Haz una versión sensible y otra insensible a mayúsculas (`str_ireplace`).</li>
            <li>Crea una contraseña con tu nombre + tu año de nacimiento, con las siguientes modificaciones:
                <ul>
                    <li>Reemplaza las vocales por (a=@, e=€, i=!, o=0, u=^).</li>
                </ul>
            </li>
        </ul>

        <?php
            $contraseña = 'ivandoceceroseisdosmiltres';
            echo '<p>' . strpos($contraseña, 'van') ? 'Existe la cadena':'No existe' . '</p>';
            echo '<p>Contraseña cifrada: ' . str_replace(['a','e','i','o','u'], ['@','€','!','0','^'], $contraseña . '</p>');
        ?>

    </section>

    <section>
        <h2>Ejercicio 4 — Subcadenas y división</h2>
        <p>Trabaja con subcadenas:</p>
        <ul>
            <li>Extraer una subcadena con `substr`.</li>
            <li>Dividir una cadena por un separador con `explode` y volver a unir con `implode`.</li>
            <li>Usa `str_split` para convertir en array de caracteres.</li>
            <li>Escribe tu nombre de Star Wars:
                <ul>
                    <li>Nombre: las primeras 3 letras de tu primer apellido + las primeras 2 letras de tu nombre</li>
                    <li>Apellido: las primeras 3 letras de tu segundo apellido + las primeras 3 letras de tu ciudad</li>
                    <li>En nombre y apellido: convierte la primera letra a mayúscula y el resto a minúscula</li>
                </ul>
            </li>
        </ul>

        <?php
            $cadena = 'ivan doce cero seis dos mil tres';
            echo '<p>Extrayendo los 6 primeros caracteres de una cadena: ' . substr($cadena, 0, 6) . '</p>';
            $arrCadena= explode(" ",$cadena);
            echo "<p>Primera posicion de la cadena separada pro espacios: $arrCadena[0] </p>";
            $arrCadena= implode(",",$arrCadena);
            echo '<p>Nueva cadena unida por comas: ' . $arrCadena . '</p>';
            $nombre = 'Ivan';
            $apellido1 = 'Moreno';
            $apellido2 = 'Lopez';
            $ciudad = 'Murcia';
            $nombreSW = substr($apellido1, 0, 2) . substr($nombre, 0, 3);
            $apellidoSW = substr($apellido2, 0, 3) . substr($ciudad, 0, 3);
            $nombreSW = strtolower($nombreSW);
            $apellidoSW =   strtolower($apellidoSW);
            $nombreCompleto = ucfirst($nombreSW) . ' ' . ucfirst($apellidoSW);
            echo "<p>Mi nombre de Star Wars es: $nombreCompleto.</p>";
        ?>

    </section>

</body>
</html>
