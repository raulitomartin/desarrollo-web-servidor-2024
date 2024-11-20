<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar de celsius a farenheit y viceversa</title>
    <?php
/*         error_reporting( E_ALL );
        ini_set("display_errors", 1 );   */
    ?>
</head>
<body>
    <form action="" method="post">

        <label for="temperatura">Temperatura</label>
        <input type="text" name="temperatura" id="temperatura">
        <select name="tiposTemperatura">
            <option value="celsius">Celsius</option>
            <option value="farenheit">Farenheit</option>
            <option value="kelvin">Kelvin</option>
        </select>


        <br>
        <br>


        <label for="convertir">Convertir a:</label>
        <select name="conversionTemperatura" id="convertir">
            <option value="conversionCelsius">Celsius</option>
            <option value="conversionFarenheit">Farenheit</option>
            <option value="conversionKelvin">Kelvin</option>

            </select>
        <br>
        <br>


        <input type="submit" value="CALCULAR">
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $temperatura = $_POST["temperatura"];
            $tiposTemperatura = $_POST["tiposTemperatura"];
            $conversionTemperatura = $_POST["conversionTemperatura"];
            
            switch ($tiposTemperatura) {
                case 'celsius':
                    $tempCelsius = $temperatura;
                    break;
                case 'farenheit':
                    $tempFarenheit = ($temperatura - 32) * 5 / 9;
                    break;
                case 'kelvin':
                    $tempKelvin = $temperatura - 273.15;
                    break;
                default:
                    # code...
                    break;
            }
            
            
            switch ($conversionTemperatura) {
                case 'celsius':
                    $conversion = $tempCelsius;
                    break;
                case 'farenheit':
                    $conversion = ($tempCelsius * 9 / 5) + 32;
                    break;
                case 'kelvin':
                    $conversion = $tempCelsius = 273.15;
                    break;
                default:
                    # code...
                    break;
            }

            echo "<h3>La temperatura convertida es: $conversion</h3>";
        }
    ?>
</body>
</html>