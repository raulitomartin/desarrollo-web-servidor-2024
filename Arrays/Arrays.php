<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos Array</title>
    <link rel="stylesheet" href="./estilo.css">
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1);
    ?>
</head>
<body>
    <?php
    
    /*
    TODOS LOS ARRAYS EN PHP SON ASOCIATIVOS, COMO LOS MAP EN JAVA

    TIENEN PARES CLAVE-VALOR
    
    */ 
        $numeros = [5,10,5,23,12,35];
        $numeros = array (6,19,9,4,3);
        print_r ($numeros); //PRINT RELATIONAL
        echo "<br><br>";
        
        $animales = ["Perro", "Gatos", "Alonso", "Hamilton"];
        print_r($animales);
        //borrar cosas en un array
        unset($animales[1]);

        print_r($animales);


        //Añadir
        array_push($animales, "Morsa","El wiwi");
        print_r($animales);
        $animales[2] = "Hakkinen";


        //Contar las cosas del array
        $cantidad_animales = count($animales);
        echo "<h3>Hay $cantidad_animales animales</h3>";


        //coche moto gasolina olo a aceite de motoh, si jode esto e sine
        /*
            CREAR EL ARRAY CON 3 COCHES
            AÑADIR 2 COCHES CON SUS MATRICULAS
            AÑADIR 1 COCHE SIN MATRICULA
            BORRAR EL COCHE SIN MATRICULA
            RESETEAR LAS CLAVES Y ALMACENAR EL RESULTADO EN OTRO ARRAY
        */
        
        echo("<h2>Ejercicio de clase</h2>");
        $coches = [
        "r25 => Renault", 
        "r26 => Renault",
        "rb19 => Redbull",
    
        ];
        print_r($coches);

        array_push($coches,"Ferrari");
        echo("<h3>Añadir 2 coches con sus matriculas</h3>");
        print_r($coches);
        echo("<br>");
        $coches["f2012"] = "Ferrari";
        print_r($coches);
        
        echo("<ol>");
        for ($i=0; $i < count($animales) ; $i++) { 
            echo("<li>" .$animales[$i]. "</li>");
        }
        echo("</ol>");
        $contador = 0;
        echo("<ul>");
        echo("<h1>animales con while</h1>");
        while ($contador < count($animales)) {
            echo("<li>" .$animales[$contador]. "</li>");
            $contador++;
        }
        echo("<ul>");


        echo("</ul>");
        foreach ($animales as $animal) {
            echo ("<li>$animal</li>");
        }
        echo("</ul>");
    ?>
    <table>
        <caption>coches</caption>
        <thead>
            <tr>
                <th>Matricula</th>
                <th>Coche</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($coches as $matricula => $coche) { ?>
                    <tr>
                        <td><?php echo $matricula?></td>
                        <td><?php echo $coche?></td>
                    </tr>
                <?php } ?>
            
        </tbody>
    </table>
</body>
</html>