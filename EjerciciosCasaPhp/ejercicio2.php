<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario multiplos</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>
<body>
<h1>Pon 3 numeros y te dire los multiplos de "c" que se encuentren entre a y b</h1>
    <form action="" method="post">
        <label for="a">numero a</label>
        <input type="text" name="a" id="a">
        <br>
        <br>
        <label for="b">Numero b</label>
        <input type="text" name="b" id="b">
        <br>
        <br>
        <label for="c">Numero c</label>
        <input type="text" name="c" id="c">
        <input type="submit" value="ENVIAR">
    </form>
    <?php
        // if ($a > $b) { No pide que controlemos que el valor de "a" y "b" pero por si las moscas lo dejo comentado
        //     echo "<h2>Error: El valor de "a" debe ser menor o igual a "b".</h2>";
        // }else {Aqui tiene que ir el for y la lista}
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $_POST["c"];
            echo "<ul>";
            for ($i = $a; $i <= $b; $i++) {
                if ($i % $c == 0) {
                    echo "<li>$i</li>";
                }
            }
            echo "</ul>";
        }
    ?>
</body>
</html>