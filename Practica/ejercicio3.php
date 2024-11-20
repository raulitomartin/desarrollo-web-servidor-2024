<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio3</title>
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1);
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="numero">Numero</label>
        <input type="text" name = "numero" id = "numero">
        
        <!--Select de SUMA Y FACTORIAL-->
        <select name="operacion">
            <option value="suma">Suma</option>
            <option value="factorial">Factorial</option>
        </select>
        <br>
        <input type="submit" value = "Calcular">

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"];
            $operacion = $_POST["operacion"];
            $resultadoSum = 0;
            $contenedor = 1;


            //calcular el sumatorio
            for ($i=1; $i <= $numero ; $i++) { 
                $resultadoSum += $i;
            }


            //calcular el factorial
            for ($i=$numero; $i >= 1; $i--) { 
                $contenedor *= $i;
                
            }


            $resultado = match ($operacion) {
                 "suma"=> $resultadoSum ,
                 "factorial"=>$contenedor
            };

            echo "<p>$resultado</p>";
        }

    
    ?>

    </form>
    
</body>
</html>