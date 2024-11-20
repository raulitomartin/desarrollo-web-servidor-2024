<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //solo existe esta forma :)
        $numero = 2;
        if($numero > 0){
            echo "<p>El numero $numero es mayor que cero</p>";
        } elseif($numero == 0) {
            echo "<p>El numero $numero es menor que cero</p>";
        }
        $num = -7;
        if ($num >= -10 and $num <=10) {
            echo "<p>EL numero $num esta en el rango [-10,0)</p>";
        } elseif ($num >= 0 && $num <= 10) {
            echo "<p> El numero $num esta en el rango [0,10]</p>";
        } elseif($num >10 and $num <= 20){
            echo "<p>EL numero $num esta en el rango (10,20]</p>";
        } else{
            echo "<p> EL numero $num esta fuera del rango</p>";
        }
        //Cositas "aleatorios"
        $num_ale = rand(1,200);
        //Cositas aleatorias pero con decimales
        $num_ale2= rand(10,100)/10;

        //Comprobar de tres formas diferentes, la estructura if, 
        //si el numero aleatorio tiene 1,2 o 3 digitos
        $digitos = 0;
        if ($num_ale <= 999 && $num_ale > 100) {
            $digitos = 3;    
        } elseif ($num_ale <= 99 && $num_ale > 10 ) {
            $digitos = 2;
        } elseif ($num_ale <= 9 && $num_ale > 0) {
            $digitos = 1;
        }
        echo "<p>El numero $num_ale tiene $digitos digitos</p>";
    ?>
</body>
</html>