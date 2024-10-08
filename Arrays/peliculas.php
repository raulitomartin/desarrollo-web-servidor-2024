<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
    <link rel="stylesheet" href="./estilo.css">
</head>
<body>
    <?php
    $numAle1 = rand(30, 240);
    $numAle2 = rand(30, 240);
    $numAle3 = rand(30, 240);
    $numAle4 = rand(30, 240);
    $numAle5 = rand(30, 240);


    $peliculas = [
        ["Karate a muerte en torremolinos", "SI", 2003, $numAle1],
        ["Sharknado 1-5", "Accion", 2015, $numAle2],
        ["Princesa por sorpresa 2", "Comedia", 2008, $numAle3],
        ["Jagger royale", "Infantil", 2000, $numAle4],
        ["Pacific Rim", "Accion", 2013, $numAle5],
    ];

    /*
        1.AÑADIR CON UN RAND, LA DURACION DE CADA PELICULA. LA DURACION SERA UN NUMERO ALEATORIO
        ENTRE 30 Y 240

        2. AÑADIR COMO UNA NUEVA COLUMNA EL TIPO DE PELICULA EL TIPO SERA: 
        CORTOMETREJE, SI LA DURACION ES MENOR QUE 60
        LARGOMETRAJE, SI LA DURACION ES MAYOR O IGUAL QUE 60

        3. MOSTRAR EN OTRA TABLA TODAS LAS COLUMNAS Y ORDENAR ADEMAS EN ESTE ORDEN:
        1 GENERO
        2 AÑO
        3 TITULO (TODO ALFABETICAMENTE, Y EL AÑO DE MAS RECIENTE A MAS ANTIGUO)
    */ 

    ?>


    <table>
        <thead>
            <th>Titulo</th>
            <th>Genero</th>
            <th>Año</th>
            <th>Duracion</th>
            <th>Tipo</th>
        </thead>
        <tbody>
        <?php
                foreach ($peliculas as $pelicula) {
                    list($titulo,$genero,$año,$duracion) = $pelicula;
                    echo "<tr>";
                    echo "<td>$titulo</td>";
                    echo "<td>$genero</td>";
                    echo "<td>$año</td>";
                    echo "<td>$duracion</td>";
                    if ($duracion < 60) {
                        echo "<td>Cortometraje</td>";
                    } elseif($duracion >= 60){
                        echo "<td>Largometraje</td>";
                    }
                    echo "</tr>";
                }

            ?>
        </tbody>
    </table>

    <h1>Ordenar por 1º Genero, 2º Año, 3º Titulo(TODO ALFABETICAMENTE, Y EL AÑO DE MAS RECIENTE A MAS ANTIGUO)</h1>
    <?php
        array_multisort($peliculas, )
    
    
    
    ?>
</body>
</html>