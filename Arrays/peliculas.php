<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
    <link rel="stylesheet" href="./estilo.css">
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1);
    ?>
</head>
<body>
    <?php

$peliculas = [
        ["Karate a muerte en torremolinos", "SI", 2003],
        ["Sharknado 1-5", "Accion", 2015],
        ["Princesa por sorpresa 2", "Comedia", 2008],
        ["Jagger royale", "Infantil", 2000],
        ["Pacific Rim", "Accion", 2013],
    ];
    for ($i=0; $i < count($peliculas); $i++) { 
        $peliculas[$i][3] = rand(30, 240);
    }


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
                    //cortometraje/largometraje
                    if ($duracion < 60) {
                        echo "<td>Cortometraje</td>";
                    } else{
                        echo "<td>Largometraje</td>";
                    }
                    echo "</tr>";
                }

            ?>
        </tbody>
    </table>

    <h1>Ordenar por 1º Genero, 2º Año, 3º Titulo(TODO ALFABETICAMENTE, Y EL AÑO DE MAS RECIENTE A MAS ANTIGUO)</h1>
    <?php
        //array_multisort($peliculas, )
        $_titulo = array_colum($peliculas,0);
        $_genero = array_column($peliculas,1);
        $año = array_column($peliculas,2);

        array_multisort($genero, SORT_ASC, $año, SORT_DESC  , $titulo, SORT_ASC, $peliculas);
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
                    //cortometraje/largometraje
                    if ($duracion < 60) {
                        echo "<td>Cortometraje</td>";
                    } else{
                        echo "<td>Largometraje</td>";
                    }
                    echo "</tr>";
                }

            ?>
        </tbody>
    </table>
</body>
</html>