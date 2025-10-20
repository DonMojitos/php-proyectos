<!doctype html>
<head>
    <title>Ejercicios PHP: Tipos de datos y casting</title>
</head>
<body>

    <h1>Ejercicios sobre tipos de datos y casting (PHP)</h1>

    <p>Cada ejercicio incluye solo el enunciado. Implementa las soluciones en este mismo archivo dentro de las secciones PHP indicadas.</p>

    <section>
        <h2>Ejercicio 1 — Identificar tipos</h2>
        <p>Define varias variables con distintos tipos de datos y muestra su tipo y valor. Debes crear al menos las siguientes variables:</p>
        <ul>
            <li>Una cadena de texto (string).</li>
            <li>Un entero (int).</li>
            <li>Un número de punto flotante (float).</li>
            <li>Un booleano (bool) con valor true y otro con false.</li>
        </ul>
        <p>Para cada variable, muestra su nombre, su tipo y su valor usando funciones de inspección de PHP (p. ej. gettype(), var_dump()).</p>

        <?php
            $cadena = 'Lo paró con una mano';
            $num = 1;
            $decimal = 34.823;
            $isPadre = false;
            $isMadre = true;
            
            
            echo "<p>El tipo de '$cadena' es: " , var_dump($cadena) , ' y su nombre es $cadena' ,"</p>";
            echo "<p>El tipo de '$num' es: " , var_dump($num) , ' y su nombre es $num' ,"</p>";
            echo "<p>El tipo de '$decimal' es: " , var_dump($decimal) , ' y su nombre es $decimal' ,"</p>";
            echo "<p>El tipo de '$isPadre' es: " , var_dump($isPadre) , ' y su nombre es $isPadre' ,"</p>";
            echo "<p>El tipo de '$isMadre' es: " , var_dump($isMadre) , ' y su nombre es $isMadre' ,"</p>";
        ?>

    </section>

    <section>
        <h2>Ejercicio 2 — Casting básico</h2>
        <p>Realiza conversiones (castings) entre cadenas y números y observa los resultados. Prueba al menos las siguientes conversiones:</p>
        <ul>
            <li>La cadena "123" a int.</li>
            <li>La cadena "123abc" a int.</li>
            <li>La cadena "abc123" a int.</li>
            <li>El número 45.67 a int y a string.</li>
            <li>La cadena "0" a bool (indica qué resultado esperas y por qué).</li>
            <li>La cadena vacía "" a bool.</li>
        </ul>
        <p>Muestra el resultado de cada casting junto con el tipo resultante.</p>

        <?php
            $n1 = (int)"123";
            $n2 = (int)"123abc";
            $n3 = (int)"abc123";
            $n4 = (String)45.67;
            echo "<p>$n1 Tipo: " . gettype($n1) . "</p>";
            echo "<p>$n2 Tipo: " . gettype($n2) . "</p>";
            echo "<p>$n3 Tipo: " . gettype($n3) . "</p>";
            echo "<p>$n4 Tipo: " . gettype($n4) . "</p>";
            echo (bool)"0" . gettype((bool)"0");
            echo (bool)"" . gettype((bool)"");
        ?>

    </section>

    <section>
        <h2>Ejercicio 3 — Cast entre booleanos y números</h2>
        <p>Comprueba cómo se convierten los booleanos en números y cómo se interpretan diversos números como booleanos. Realiza y muestra estas conversiones:</p>
        <ul>
            <li>true a int y false a int.</li>
            <li>1, 0 y 2 a bool (explica por qué cada uno da true o false).</li>
        </ul>
        <p>Incluye la inspección de tipo y valor para cada conversión.</p>

        <?php
            echo (int)true . ' '. (int)false. ' (bool)1: '.(bool)1 . ' (bool)0: '. (bool)0 . '  (bool)2: '. (bool)2;
        ?>

    </section>

</body>
</html>
