<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas</title>
</head>
<body>
    <?php
        $numero = "2";
        if ($numero === 2) {
            echo "<p>EXITO</p>";
        } else {
            echo "<p>NO EXITO</p>";
        }


        $hora = (int) date ("G");
        //var_dump ($hora);

        /*
            SI $hora ENTRE 6 y 11 es MAñana
            SI $hora ENTRE 12 Y 14 es MEDIODIA
            SI $hora ENTRE 15 y 20 es TARDE
            SI $hora ENTRE 20 y 24 es NOCHE
            SI $hora ENTRE 1 y 5 es MADRUGADA
        */
        $momento = "jiji";
        if ($hora >= 6 && $hora <= 11 ) {
            $momento = "Mañana";
        } elseif ($hora >= 12 && $hora <= 14) {
            $momento = "MedioDia";
        }elseif ($hora >= 15 && $hora <= 20) {
            $momento = "Tarde";
        }elseif ($hora >= 20 && $hora <= 24) {
            $momento = "Noche";
        }elseif ($hora >= 1 && $hora <= 15) {
            $momento = "Madrugada";            
        }
        echo "<p>Es $momento</p>";
        
        $n = rand (1,3);
        
        switch ($n) {
            case 1 :
                echo "EL numero es 1 ";
                break;
            case 2:
                echo "El numero es 2";
                break;
            default:
                echo "EL numero es 3";
                break;
        }
        //hora exacta
        $hora_exacta = date ("H:i:s");
        echo "<h1>$hora_exacta</h1>";
        $dia = date ("l");
        echo "<h2>Hoy es $dia</h2>";
        /*HACER UN SWITCH QUE DIGA SI HOY TENEMOS CLASE*/
        switch ($dia) {
            case "Monday":
                echo "Hoy hay clase :(";
                break;
            case "Wednesday":
                echo "Hoy hay clase :(";
                break;
            case "Friday ":
                echo "Hoy hay clase :(";
                break;
            default:
                echo "HOY NO HAY CLASE";
                
        }



    ?>
</body>
</html>