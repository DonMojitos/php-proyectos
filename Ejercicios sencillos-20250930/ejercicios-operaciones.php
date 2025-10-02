<!doctype html>
<head>
    <title>Ejercicios PHP: Operaciones</title>
</head>
<body>

    <h1>Ejercicios sobre operaciones (aritméticas, comparación y lógicas)</h1>

    <p>Cada ejercicio incluye solo el enunciado. Implementa las soluciones en este mismo archivo dentro de las secciones PHP indicadas.</p>

    <section>
        <h2>Ejercicio 1 — Operaciones aritméticas</h2>
        <p>Declara dos variables numéricas y realiza las siguientes operaciones, mostrando el resultado y el tipo:</p>
        <ul>
            <li>Suma</li>
            <li>Resta</li>
            <li>Multiplicación</li>
            <li>División</li>
            <li>Resto (módulo)</li>
            <li>Potencia (usar **)</li>
        </ul>
        <p>Muestra además una operación con mezcla de int/float y observa el tipo resultante.</p>
        <p>Haz una operación de conversión de temperatura. Declara una variable para la temperatura en grados Celsius y conviértela a Fahrenheit y a Kelvin.</p>

        <?php
            $num1 = 77;
            $num2 = 1234;
            $num3 = 1.2324;
            $celsius = 36;
            $fahrenheit = ($celsius * 9/5) + 32;
            $kelvin = $celsius + 273.15;
            echo '<p>---Operaciones aritméticas---</p>';
            echo '<p>Suma: ' . $num1 + $num2 . '.</p>';
            echo '<p>Resta: ' . $num1 - $num2 . '.</p>';
            echo '<p>Multiplicación: ' . $num1 * $num2 . '.</p>';
            echo '<p>División: ' . $num1 / $num2 . '.</p>';
            echo '<p>Módulo: ' . $num1 % $num2 . '.</p>';
            echo '<p>Potencia: ' . $num1 ** $num2 . '.</p>';
            echo '<p>---Operaciones aritméticas---</p>';
            echo '<p>Óperación mezcla de int/float: ' . $num1 * $num3 . '.</p>';
            echo '<p>Grados Celsius: ' . $celsius. 'ºC.</p>';
            echo '<p>Grados Fahrenheit: ' . $fahrenheit. 'ºF.</p>';
            echo '<p>Grados Kelvin: ' . $kelvin. 'ºK.</p>';

        ?>

    </section>

    <section>
        <h2>Ejercicio 2 — Operadores de comparación</h2>
        <p>Usa distintos operadores de comparación entre varias parejas de valores y muestra el resultado (true/false) y una explicación breve:</p>
        <ul>
            <li>== y === entre "123" y 123</li>
            <li>!= y !== entre 0 y false</li>
            <li>>, &lt;, &gt;=, &lt;= entre números</li>
            <li>Comparación entre arrays con == y === (explica la diferencia)</li>
        </ul>

        <?php
            echo '<p>Operacion \'123\' == 123 tiene como resultado: '. ('123' == 123 ? ' true':' false'). '</p>';
            echo "<p>Operacion '123' === 123 tiene como resultado: ". ('123' === 123 ? " true":" false"). "</p>";
            echo '<p>Operacion 0 != false tiene como resultado: '. (0 != false ? ' true':' false'). '</p>';
            echo '<p>Operacion 0 !== false tiene como resultado: '. (0 !== false ? ' true':' false'). '</p>';
            echo '<p>Operacion 0 > 1 tiene como resultado: '. (0 > 1 ? ' true':' false'). '</p>';
            echo '<p>Operacion 0 < 1 tiene como resultado: '. (0 < 1 ? ' true':' false'). '</p>';
            echo '<p>Operacion 1 >= 1.5 tiene como resultado: '. (1 >= 1.5 ? ' true':' false'). '</p>';
            echo '<p>Operacion [1,2,3,4,5] == [\'1\',\'2\',\'3\',\'4\',\'5\'] tiene como resultado: '. ([1,2,3,4,5] == ['1','2','3','4','5'] ? ' true':' false'). ' porque solo compara el valor, no el tipo de dato</p>';
            echo '<p>Operacion [1,2,3,4,5] === [\'1\',\'2\',\'3\',\'4\',\'5\'] tiene como resultado: '. ([1,2,3,4,5] === ['1','2','3','4','5'] ? ' true':' false'). ' porque compara el tipo de dato y el valor</p>';
        ?>

    </section>

    <section>
        <h2>Ejercicio 3 — Operadores lógicos</h2>
        <p>Comprueba combinaciones de expresiones booleanas usando AND, OR, XOR y NOT (&&, ||, xor, !). Para cada combinación, muestra la expresión, su valor y una breve explicación del porqué.</p>
        <ul>
            <li>(true && false)</li>
            <li>(true || false)</li>
            <li>(true xor true)</li>
            <li>!false</li>
            <li>Combina condiciones con parentesis para mostrar precedencia (por ejemplo: true || false && false)</li>
        </ul>

        <?php
            echo '<p>Combinacion "true && false" tiene como resultado: ' . (true && false ? 'true':'false') . '.</p>';
            echo '<p>Combinacion "true AND false" tiene como resultado: ' . ((true AND false) ? 'true':'false') . '.</p>';
            echo '<p>Combinacion "true || false" tiene como resultado: ' . (true || false ? 'true':'false') . '.</p>';
            echo '<p>Combinacion "true || false" tiene como resultado: ' . ((true OR false) ? 'true':'false') . '.</p>';
            echo '<p>Combinacion "true XOR false" tiene como resultado: ' . ((true XOR false) ? 'true':'false') . '.</p>';
            echo '<p>Combinacion "!false" tiene como resultado: ' . (!false ? 'true':'false') . '.</p>';
            echo '<p>Combinacion "((true || false) && false)" tiene como resultado: ' . (((true || false) && false) ? 'true':'false') . '.</p>';
        ?>

    </section>

    <section>
        <h2>Ejercicio 4 — Mini-retos</h2>
        <p>Resuelve los siguientes mini-retos y muestra cómo los resolverías en PHP:</p>
        <ol>
            <li>Intercambia los valores de dos variables sin usar una tercera variable (usa operadores aritméticos o bit a bit).</li>
            <li>Comprueba si un número es par o impar usando operadores (sin usar funciones).</li>
            <li>Evalúa si una variable está entre dos valores (inclusive) usando operadores de comparación y lógicos.</li>
        </ol>

        <?php
            $a = 1;
            $b = 3;
            
            $a = $a + $b;
            $b = $a - $b;
            $a = $a - $b;
            echo "<p>$a  $b</p>";

            $numero = 8;
            echo "<p>" . ($numero % 2 === 0 ? "Es par" : "Es impar") . "</p>";

            $num1 = 99;
            $num2 = 10;
            $num3 = 3;
            echo "<p>Está $num1 entre $num3 y $num2: " . (($num1 >= $num3 && $num1 <= $num2) ? "Sí":"No") . "</p>"  
        ?>

    </section>

</body>
</html>
