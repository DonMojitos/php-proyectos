<!doctype html>
<head>
    <title>Examen Práctico PHP - UT02</title>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }
        h1 {
            color: #2c3e50;
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
        }
        h2 {
            color: #34495e;
            background-color: #ecf0f1;
            padding: 10px;
            border-left: 5px solid #3498db;
        }
        section {
            margin-bottom: 30px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        .info-box {
            background-color: #d5dbdb;
            padding: 15px;
            border-radius: 5px;
            margin: 10px 0;
        }
        ul, ol {
            margin: 10px 0;
            padding-left: 25px;
        }
        .php-section {
            background-color: #f8f9fa;
            border: 2px dashed #6c757d;
            padding: 15px;
            margin: 10px 0;
            min-height: 60px;
        }
        sup {
            font-size: 0.8em;
        }
    </style>
</head>
<body>

    <h1>Examen Práctico PHP - Unidad 02</h1>
    
    <div class="info-box">
        <p><strong>Instrucciones:</strong></p>
        <ul>
            <li>Implementa las soluciones en este mismo archivo dentro de las secciones PHP indicadas</li>
            <li>Cada ejercicio debe mostrar claramente los resultados con echo, var_dump() o print_r()</li>
            <li>Comenta tu código cuando sea necesario para explicar la lógica</li>
            <li>Se valorará la correcta aplicación de los conceptos y la claridad del código</li>
        </ul>
    </div>

    <section>
        <h2>Ejercicio 1 — Análisis de tipos y conversiones (0.75 puntos)</h2>
        <p>Realiza las siguientes tareas relacionadas con tipos de datos y casting:</p>
        
        <p><strong>1.1)</strong> Declara las siguientes variables y muestra su tipo y valor usando <code>var_dump()</code>:</p>
        <ul>
            <li>Una variable con el texto "2024"</li>
            <li>Una variable con el número 42.5</li>
            <li>Una variable con valor booleano false</li>
            <li>Una variable con el valor null</li>
        </ul>

        <p><strong>1.2)</strong> Realiza las siguientes conversiones y explica el resultado:</p>
        <ul>
            <li>Convierte "15.7abc" a int y a float</li>
            <li>Convierte el número 0 y el número -5 a booleano</li>
            <li>Convierte las cadenas "", "0" y "false" a booleano</li>
        </ul>

        <p><strong>1.3)</strong> ¿Cuál será el resultado de las siguientes comparaciones? Escribe tu predicción como comentario y luego verifica con código:</p>
        <ul>
            <li><code>"123" == 123</code></li>
            <li><code>"123" === 123</code></li>
            <li><code>true == 1</code></li>
            <li><code>false === 0</code></li>
        </ul>

        <div class="php-section">
            <?php

                //APARTADO 1.1)
                $year = "2024";
                $num = 42.5;
                $isBool = false;
                $isNull = null;

                //APARTADO 1.2)
                $mix = "15.7abc";
                echo "<p>Conversion a int: " , var_dump((int)$mix) , ". Se aprecia que la variable se conviertio en un entero eliminando decimales y caracteres.</p>";
                echo "<p>Conversion a float: " , var_dump((float)$mix) , ". Se aprecia que la variable se conviertio en un float eliminando caracteres y dando todo le valor decimal que el lenguaje permite.</p>";
                echo "<p>Conversion de 0 a booleano: " , var_dump((bool)0) , ". Se aprecia que el resultado es false pues 0 lo interpreta de forma booleana como el false.</p>";
                echo "<p>Conversion de -5 a booleano: " , var_dump((bool)-5) , ". Se aprecia que el resultado es true pues, al parecer, cualquier numero distinto de 0 es false.</p>";
                echo "<p>Conversion de \"\" a booleano: " , var_dump((bool)"") , ". Se aprecia que el resultado es false pues un String vacio es un booleano para el interprete.</p>";
                echo "<p>Conversion de \"0\" a booleano: " , var_dump((bool)"0") , ". Se aprecia que el resultado es false pues \"0\" no lo toma como el valor numerico.</p>";
                echo "<p>Conversion de \"false\" a booleano: " , var_dump((bool)"false") , ". Se aprecia que el resultado es true pues \"false\" lo interpreta como el propio valor false.</p>";

                //APARTADO 1.3)

                //Predicción: true
                echo '<p>' , var_dump("123" == 123) , '</p>';
                //Predicción: false
                echo '<p>', var_dump("123" === 123) , '</p>';
                //Predicción: true
                echo '<p>', var_dump(true == 1) , '</p>';
                //Predicción: true
                echo '<p>', var_dump(false === 0) , '</p>';
            ?>
        </div>
    </section>

    <section>
        <h2>Ejercicio 2 — Operaciones y lógica (0.75 puntos)</h2>
        
        <p><strong>2.1)</strong> Declara dos variables numéricas (<code>$a = 17</code> y <code>$b = 5</code>) y calcula:</p>
        <ul>
            <li>La división con resultado decimal</li>
            <li>El resto de la división</li>
            <li>Comprueba si $a es divisible por $b. <b>Nota</b>: "ser divisible" implica una división con resto 0</li>
        </ul>

        <p><strong>2.2)</strong> Evalúa las siguientes expresiones lógicas y explica por qué dan ese resultado:</p>
        <ul>
            <li><code>(true && false) || (false || true)</code></li>
            <li><code>!(true && false) && true</code></li>
        </ul>

        <p><strong>2.3)</strong> Crea una expresión que determine si un número está entre 10 y 50 (inclusive) Y es par. Prueba con los números: 15, 42, 8, 50.</p>

        <div class="php-section">
            <?php

                //APARTADO 2.1)
                $a = 17;
                $b = 5;
                echo '<p>' , (float)($a/$b) , '</p>';
                echo '<p>' , (float)($a%$b) , '</p>';
                echo '<p>' , $a%$b == 0 ? "Si es divisible":"No es divisible" , '</p>';

                //APARTADO 2.2)
                $a = 17;
                $b = 5;
                echo '<p>' , var_dump((true && false) || (false || true)) , '. Este resultado es true porque la primera parte es false O true (igual que en la segunda parte de la condicion) y dado que la condicion || da true siempre que se cumpla una parte en este caso es true.</p>';
                echo '<p>' , var_dump(!(true && false) && true), '. Este resultado es true porque la primera parte es la negaciond e true, que leugo se compara con true Y true, dando true como resultado.</p>';
                
                //APARTADO 2.3)
                $arrNum = [15, 42, 8, 50];

                for ($i=0; $i < sizeof($arrNum); $i++) { 
                    echo "<p>El número $arrNum[$i] " , ($arrNum[$i] >= 10 && $arrNum[$i]<= 50) && ($arrNum[$i]%2 == 0) ? "es par." : "no es par o esta fuera del rango permitido." , '</p>'; 
                }

            ?>
        </div>
    </section>

    <section>
        <h2>Ejercicio 3 — Manipulación de cadenas (1 punto)</h2>
        
        <p><strong>3.1)</strong> Dada la cadena <code>"    PHP es un Lenguaje de Programación  "</code> :</p>
        <ul>
            <li>Elimina los espacios del principio y final</li>
            <li>Convierte toda la cadena a mayúsculas</li>
            <li>Cuenta cuántos caracteres tiene la cadena limpia</li>
            <li>Reemplaza "php" por "Python" (insensible a mayúsculas)</li>
            <li>Comprueba si contiene la palabra "lenguaje" (insensible a mayúsculas)</li>
        </ul>

        <p><strong>3.2)</strong> Crea tu "nombre de hacker" siguiendo estas reglas:</p>
        <ul>
            <li>Toma tu nombre completo (ejemplo: "Ignacio Mascarell Llorens")</li>
            <li>Convierte a minúsculas</li>
            <li>Reemplaza las vocales: a→@, e→3, i→1, o→0, u→^</li>
            <li>Elimina todos los espacios</li>
            <li>Añade al final los dos últimos dígitos del año actual (25)</li>
        </ul>

        <div class="php-section">
            <?php

                //APARTADO 3.1)
                $cadena = '    PHP es un Lenguaje de Programación  ';
                echo '<p>Espacios limpios: ' , trim($cadena) , '</p>';
                echo '<p>Mayusculas todo: ' , strtoupper($cadena) , '</p>';
                echo '<p>Numero caracteres: ' , strlen(trim($cadena)) , '</p>';
                echo '<p>Reemplazo de Phyton (como la vida misma): ' , str_ireplace('php', 'Phyton', $cadena) , '</p>';
                echo '<p>Comprobacion de subcadena: ' , stripos($cadena, 'lenguaje') , '</p>';

                //APARTADO 3.2)
                $nombre = "Ivan Moreno Lopez";
                $nombreMinus = strtolower($nombre);
                $reemplazo = str_ireplace(['a','e','i','o','u'], ['@','3','1','0','^'], $nombreMinus);
                $reemplazoSinEspacios = str_replace(" ", "", $reemplazo);
                $nombreFinal = $reemplazoSinEspacios . date('y');
                echo '<p>' , $nombreFinal , '</p>';

            ?>
        </div>
    </section>

    <section>
        <h2>Ejercicio 4 — Constantes y funcionalidades avanzadas (1 punto)</h2>
        
        <p><strong>4.1)</strong> Muestra información del sistema usando constantes predefinidas:</p>
        <ul>
            <li>La versión de PHP</li>
            <li>El sistema operativo</li>
            <li>El separador de directorios del sistema</li>
            <li>El archivo actual (usa constantes mágicas)</li>
        </ul>

        <p><strong>4.2)</strong> Define las siguientes constantes y úsalas:</p>
        <ul>
            <li>Una constante llamada <code>IVA</code> con valor 0.21</li>
            <li>Una constante llamada <code>DESCUENTO_MAXIMO</code> con valor 50</li>
        </ul>
        
        <p><strong>4.3)</strong> Calcula el precio final de un producto:</p>
        <ul>
            <li>Precio base: 100€</li>
            <li>Aplica un descuento del 15%</li>
            <li>Aplica el IVA sobre el precio con descuento</li>
            <li>Muestra el precio final</li>
        </ul>

        <div class="php-section">
            <?php

                //APARTADO 4.1)
                echo '<p>Version PHP: ' . PHP_VERSION . '</p>';
                echo '<p>Sistema operativo: ' . PHP_OS . '</p>';
                echo '<p>Separador de directorios del sistema: ' . DIRECTORY_SEPARATOR . '</p>';
                echo '<p>Archivo actual: ' . __FILE__ . '</p>';

                //APARTADO 4.2)
                const IVA = 0.21;
                const DESCUENTO_MAXIMO = 50;

                //APARTADO 4.3)
                $precio = 100;
                $precioDescuento15 = $precio * 0.85;
                $precioIVA = $precioDescuento15 * (1-IVA);
                echo '<p>Precio con descuento del 15%: ' , $precioDescuento15 , ' euros.</p>';
                echo '<p>Precio IVA y descuento 15%: ' . $precioIVA . ' euros.</p>';

            ?>
        </div>
    </section>

    <section>
    <h2>Ejercicio 5 — Escape (1.5 puntos)</h2>

    <p>Los magnates multimillonarios lo han conseguido, el planeta Tierra es inhabitable.
    Jeffrey Benzos y Elos Munk han diseñado un cohete para poder escapar al planeta de sus sueños: Marte.
    En los viajes espaciales, cada gramo de peso es crucial debido a que determina el consumo de combustible
    en momentos críticos, como la aceleración para despegar y la desaceleración cuando se aproximan a su destino.</p>

    <p>Como buen fan de la criptomoneda Dogo, los coches Telsa y los productos de Amazing que eres, te han encargado
    el diseño del software para el <b>cálculo de los datos</b> necesarios para la fabricación del módulo de escape,
    y los ingenieros aeroespaciales te han dado las siguientes indicaciones:</p>
    <ul>
    <li>El depósito de combustible es cilíndrico. La fórmula para calcular el volumen de un cilindro es: <b>V = π · r<sup>2</sup> · h</b></li>
    <li>Por motivos de integridad estructural, el diámetro máximo del depósito de combustible es de <b>8 metros</b></li>
    <li>El factor de conversión de volumen en <b>metros cúbicos</b> a <b>litros</b> es 1000 (1 metro cúblico equivale a 1000 litros)</li>
    <li>Cada pasajero pesa un máximo de <b>80kg</b>. Por motivos de seguridad, asumiremos que todos los pasajeros tienen este peso. Si alguno lo excede, será descartado de la misión</li>
    <li>El módulo en el que viajan los pasajeros pesa una base de <b>2500kg</b>, pero <b>cada 4 pasajeros</b> hay que realizar una ampliación que aumenta
    el peso en <b>750kg</b></li>
    <li>Durante el despegue se necesitan <b>500 litros</b> de combustible por cada kg de peso</li>
    <li>Durante la desaceleración se necesitan <b>350 litros</b> de combustible por cada kg de peso</li>
    <li>Se aplicará un factor de seguridad de un <b>20% adicional</b></li>
    </ul>
    <p>Deberás declarar una variable con el total de pasajeros y, en base a su valor, realizar y mostrar el resultado
    de los siguientes cálculos:</p>
    <ul>
    <li>Peso total del módulo de escape.
    <li>Litros de combustible necesarios.
    <li>Altura del depósito de combustible.
    </ul>
    <p>Haz pruebas con varios pasajeros y anota los resultados como comentarios.</p>
    <div class="php-section">
    <?php
        
        $numeroPasajeros = 10;
        $radioCuadrado = 4**2;
        $pesoPasajeros = 80 * $numeroPasajeros;
        $moduloPasajeros = 2500;
        $factorSeg = 1.2;
        
        $contador = 0;
        $pesoExtra= 0;
        for ($i=0; $i <= $numeroPasajeros; $i++) { 
            if(($i != 0) && ($i % 4 == 0)){
                $contador++;
            }
            $pesoExtra = $contador * 750;
        }
        $pesoModuloTotal = $moduloPasajeros + $pesoExtra;

        $combustibleDespegue = 500 * ($pesoPasajeros + $pesoModuloTotal);
        $combustibleAterrizaje = 350 * ($pesoPasajeros + $pesoModuloTotal);
        $combustibleSinSeg = $combustibleDespegue + $combustibleAterrizaje;
        $combsutibleTotal = $combustibleSinSeg * $factorSeg;

        $altura = ($combsutibleTotal/1000) / ($radioCuadrado * M_PI);

        echo "<p>Teniendo en cuenta que el total de pasajeros es: $numeroPasajeros. </p>";
        echo '<p>El peso total del modulo de escape es: ' . $pesoModuloTotal . 'Kg.</p>';
        echo '<p>El combustible total es de: ' . $combsutibleTotal . 'L.</p>';
        echo '<p>La altura del depósito de combustible es de: ' . $altura . 'm.</p>';

        /*
        RESULTADO CON 6 PASAJEROS:
            -El peso total del modulo de escape es: 3250Kg.
            -El combustible total es de: 3804600L.
            -La altura del depósito de combustible es de: 75.690112060928m.

        RESULTADO CON 8 PASAJEROS:
            -El peso total del modulo de escape es: 4000Kg.
            -El combustible total es de: 4732800L.
            -La altura del depósito de combustible es de: 94.156064333165m.

        RESULTADO CON 11 PASAJEROS:
            -El peso total del modulo de escape es: 4000Kg.
            -El combustible total es de: 4977600L.
            -La altura del depósito de combustible es de: 99.026205591777m.
        */

    ?>
    </div>
    </section>

</body>
</html>
