<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar de celsius a farenheit y viceversa</title>
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1 );  
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="temperatura">Temperatura</label>
        <input type="text" name="temperatura" id="temperatura">
        <br>
        <br>
        <select name="tiposTemperatura">
            <option value="celsius">Celsius</option>
            <option value="farenheit">Farenheit</option>
        </select>
        <br>
        <br>
        <input type="submit" value="CALCULAR">
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $temperatura = $_POST['temperatura'];
            $tiposTemperatura = $_POST['tiposTemperatura'];

            $transformacion = match ($tiposTemperatura) {
                 'celsius'=> (($temperatura - 32) *5 / 9),
                 'farenheit'=>(($temperatura * 9 / 5) + 32),
            };                        
        }
        echo "<h2>La temperatura es:$transformacion</h2>";
    ?>
</body>
</html>