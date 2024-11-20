<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencias</title>
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1);
    ?>
</head>
<body>
    <form action="" method = "post">
        <label for ="base">Base</label>
        <input type="text" name = "base" id = "base">
        <input type="submit" value = "calcular">
        <label for="exponente">Exponente</label>
        <input type="text" name = "exponente" id = "exponente">
    </form>

    <?php



        /*
            CREAR UN FORMULARIO QUE RECIBA DOS PARAMETROS: BASE Y EXPONENTE

            CUANDO SE ENVIE EL FORMULARIO, SE CALCULARA EL RESULTADO DE ELEVAR
            LA BASE AL EXPONENTE

            EJEMPLOS

            2 ELEVADO A 3 = 8 2x2x2 =8
            3 ELEVADO A 2 = 9 3x3 = 9
        */
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $exponente = $_POST["exponente"];
            $base = $_POST["base"];
            $resultado = 1;
            for ($i=0; $i < $exponente; $i++) { 
                $resultado *= $base;
                
            }

        }
        echo "<h1>El resultado es: $resultado</h1>"
    ?>

    
    
</body>
</html>