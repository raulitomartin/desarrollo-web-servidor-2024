<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio While IF multiplos de 3</title>
</head>
<body>
    <?php
        $contador = 1;//PARA PODER SALIR DEL BUCLE WHILE.
        $limite = 20;//LIMITE DE VUELTAS.

        echo ("<h1>Numeros multiplos de 3</h1>");
        while ($contador <= $limite) { //MIENTRAS EL CONTADOR SEA MENOR QUE EL LIMITE ESO NO PARA LOQUETE
            if ($contador % 3 == 0 ) { //PARA SABER SI ES MULTIPLO DE 3
                echo ("<ul<li>$contador</li></ul>");
                $contador ++;
            }
            $contador ++;
        }
        echo ("<h1>Ejercicio Multiplos de 2</h1>");
        $contador = 1;//Contador para poder salir del bucle while
        $limite = 20;//Limite de vueltas
        $suma = 0;//Variable para poder sumar los numeros pares
        while ($contador <= $limite) {
            if ($contador %2 == 0) { //Controlo los numeros pares para luego poder sumarlos.
                $suma += $contador;
                $contador ++;
            }
            $contador ++;

        }
        echo ("<p>La suma de los numeros pares entre 1 y 20 es: $suma</p>");
        echo("<h1>Ejercicio factorial de 6</h1>");
        $factorial = 6;
        $contenedor = 1;//Donde almaceno las cosas del factorial (No se que coño es un factorial)
        for ($i=$factorial; $i >= 1; $i--) { 
            $contenedor *= $i;
            echo ("<p>$contenedor</p>");
        }
        echo ("<h1>Ejercicio Clase Numeros primos</h1>");
        $numero = 7;
        $esPrimo = true;
        for ($i=2; $i < numero; $i++) { 
            if ($numero % $i ==0) {
                $esPrimo = false;
                break;                
            }
        }
        if ($esPrimo) {
            echo ("<p>El $numero es primo </p>");
        }else {
            echo ("<p>El $numero no es primo </p>");
        }
    
    ?>
</body>
</html>