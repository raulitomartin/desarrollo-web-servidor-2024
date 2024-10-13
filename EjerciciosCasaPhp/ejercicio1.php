<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario 3 numeros</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>

<body>
    <h1>Pon 3 numeros y te dire cual es el mayor</h1>
    <form action="" method="post">
        <label for="numero1">Numero1</label>
        <input type="text" name="numero1" id="numero1">
        <br>
        <br>
        <label for="numero2">Numero2</label>
        <input type="text" name="numero2" id="numero2">
        <br>
        <br>
        <label for="numero3">Numero3</label>
        <input type="text" name="numero3" id="numero3">
        <input type="submit" value="ENVIAR">
    </form>
    <?php
        $numeroMasGrande = 0;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero1 = $_POST["numero1"];
            $numero2 = $_POST["numero2"];
            $numero3 = $_POST["numero3"];
            //$numeroMasGrande = max($numero1, $numero2, $numero3); Es otra manera mas sencilla, pero como no sé si lo puedo usar lo dejo comentado por si las moscas
            if ($numero1 > $numeroMasGrande) {
                $numeroMasGrande = $numero1;
            } 
            if ($numero2 > $numeroMasGrande) {
                $numeroMasGrande= $numero2;
            } 
            if ($numero3 > $numeroMasGrande) {
                $numeroMasGrande = $numero3;
            }
            
        }
        echo "<h2>El numero mas grande es: $numeroMasGrande</h2>"
    ?>

</body>

</html>