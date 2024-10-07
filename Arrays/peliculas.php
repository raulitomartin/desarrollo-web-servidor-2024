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
    $peliculas = [
        ["Karate a muerte en torremolinos", "SI", 2003],
        ["Sharknado 1-5", "Accion", 2015],
        ["Princesa por sorpresa 2", "Comedia", 2008],
        ["Jagger royale", "Infantil", 2000],
        ["Pacific Rim", "Accion", 2013],
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
            <th>Titilo</th>
            <th>Genero</th>
            <th>Año</th>
        </thead>
        <tbody>
        <?php
                foreach ($peliculas as $pelicula) {
                    list($titulo,$Genero,$Año) = $pelicula;
                    echo "<tr>";
                    echo "<td>$titulo</td>";
                    echo "<td>$Genero</td>";
                    echo "<td>$Año</td>";
                    echo "</tr>";
                }
            
            
            ?>
        </tbody>
    </table>
</body>
</html>