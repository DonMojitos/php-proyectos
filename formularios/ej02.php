<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Numero 1</label>
        <input name="n1" type="number" required>
        <label>Numero 2</label>
        <input name="n2" type="number" required>
        <input name="operacion" type="radio" value="+" required>
        <label>Suma</label>
        <input name="operacion" type="radio" value="-" required>
        <label>Resta</label>
        <input name="operacion" type="radio" value="*" required>
        <label>Multiplicar</label>
        <input name="operacion" type="radio" value="/" required>
        <label>Dividir</label>
        <input type="submit" value="Enviar">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $n1 = (int)$_POST['n1'];
            $n2 = (int)$_POST['n2'];

            $operacion = $_POST['operacion'];

            switch($operacion){
                case '+':
                    echo "<p>El resultado de sumar es: " .  $n1 + $n2 . ".</p>";
                    break;
                case '-':
                    echo "<p>El resultado de restar es: " .  $n1 - $n2 . ".</p>";
                    break;
                case '*':
                    echo "<p>El resultado de multiplicar es: " .  $n1 * $n2 . ".</p>";
                    break;
                case '/':
                    echo $n2 === 0 ? "<p>No se puede dividir por 0.</p>" : "<p>El resultado de dividir es: " .  $n1 / $n2 . ".</p>";
                    break;
                default:
                    echo "<p>De alguna forma te has equivocado.</p>";
                    break;
            }     
        }
    ?>
</body>
</html>