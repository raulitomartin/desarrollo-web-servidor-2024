<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario que recibe 2 numeros primos</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>
<body>
    <h1>Dime 2 numeros y te direlos numeros primos dentro de ese rango.</h1>
    <form action="" method="post">
        <label for="numero1">Numero1</label>
        <input type="text" name="numero1" id="numero1">
        <br>
        <br>
        <label for="numero2">Numero2</label>
        <input type="text" name="numero2" id="numero2">
        <input type="submit" value="ENVIAR">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero1 = $_POST["numero1"];
            $numero2 = $_POST["numero2"];

            echo "<ul>";
            for ($i = $numero1; $i <= $numero2; $i++) {
                $esPrimo = true;
                $j = 2;//segun internet cualquier numero menor a 2 no es primo, por eso empieza en 2
                
                while ($j < $i && $esPrimo) {//mientras j sea mayor que i y el booleano es primo sea true esto rula
                    if ($i % $j == 0) {
                        $esPrimo = false;
                    }
                    $j++;
                }
                
                if ($esPrimo && $i>1) { //si el numero es primo y mayor que 1 se imprime, he tenido que controlar el 1 porq internet dice que el 1 no es primo
                    echo "<li>$i</li>";
                }
            }
            echo "</ul>";
        }
    ?>

</body>
</html>