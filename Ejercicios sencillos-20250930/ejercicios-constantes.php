<!doctype html>
<head>
    <title>Ejercicios PHP: Constantes</title>
</head>
<body>

    <h1>Ejercicios sobre constantes (predefinidas, mágicas y definición)</h1>

    <p>Implementa las soluciones en este mismo archivo dentro de las secciones PHP indicadas. Cada sección contiene enunciados y sugerencias para experimentar.</p>

    <section>
        <h2>Ejercicio 1 — Constantes predefinidas</h2>
        <p>PHP incluye muchas constantes predefinidas útiles. Muestra el valor y explica brevemente cada una de las siguientes constantes:</p>
        <ul>
            <li>Versión de PHP</li>
            <li>Sistema operativo</li>
            <li>Separador de directorios</li>
        </ul>
        <p>Además, usa <code>defined()</code> para comprobar si una constante predefinida existe antes de mostrarla.</p>

        <?php
            $cu = '';
            echo '<p>Version de PHP: ' . PHP_VERSION . '. Esta constante indica la version del interprete de PHP</p>';
            echo '<p>Sistema Operativo: ' . PHP_OS . '. Esta constante indica el sistema operativo en el que trabaja PHP</p>';
            echo '<p>Separador de directorios: ' . DIRECTORY_SEPARATOR . '. Esta constante indica que caracter es el que separa directorios</p>';
            echo defined("PHP_VERSION")?'Si existe':'No existe';
            
        ?>

    </section>

    <section>
        <h2>Ejercicio 2 — Constantes "mágicas"</h2>
        <p>Las constantes mágicas cambian según el contexto (archivo, línea, clase, método...). Muestra el valor de estas constantes dentro del archivo y explica su comportamiento:</p>
        <ul>
            <li>Fichero actual</li>
            <li>Directorio actual</li>
            <li>Número de línea actual</li>
        </ul>

        <?php
        // EJERCICIO 2
        ?>

    </section>

    <section>
        <h2>Ejercicio 3 — Definir tus propias constantes (define y const)</h2>
        <p>Practica la creación de constantes con <code>define()</code> y con <code>const</code> dentro y fuera de clases. En particular:</p>
        <ul>
            <li>Define una constante global usando <code>define</code> y muéstrala.</li>
            <li>Define otra constante usando <code>const</code> dentro de una clase y accede a ella.</li>
            <li>Intenta redefinir una constante y observa el comportamiento.</li>
            <li>Comprueba la diferencia entre constantes y variables (inmutabilidad).</li>
        </ul>

        <?php
        // EJERCICIO 3
        ?>

    </section>

</body>
</html>
