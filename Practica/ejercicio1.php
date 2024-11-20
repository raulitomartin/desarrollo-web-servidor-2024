<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio1</title>
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1);
    ?>
    <style>
    table{
        border: 1px solid ;
    }   
     td, th{
        border : 1px solid ;
    }
    </style>
</head>
<body>
<?php
//Creo el array asociativo bidimensional
    $animes = [ 
        ["Evangelion", "Mechas"],
        ["Full Metal", "Aventuras"],
        ["Dragon ball", "Shonen"],
    ];


    //Inserto 2 nuevos animes al array.
    $nuevo_anime1 = ["Fairy Tail", "Aventuras"];
    $nuevo_anime2 = ["JoJos ", "Aventuras bizarras"];
    array_push($animes, $nuevo_anime1);
    array_push($animes, $nuevo_anime2);


    //Elimino el primer anime del array
    //unset($animes[0]);
    //print_r($animes);
    //No me acuerdo de como reorganizar el array para que no se quede el primer valor indefinido


    //Añado la tercera columna 
    for ($i=0; $i < count($animes); $i++) { 
        $animes[$i][2] = rand(1990, 2030);
    }


    
    //Añado la cuarta columna 
    for ($i=0; $i < count($animes); $i++) { 
            $animes[$i][3] = rand(1, 99);
    }


    //Añado la quinta columna 
    for ($i=0; $i < count($animes); $i++) { 
            if ($animes[$i][2] <= 2024) {
                $animes[$i][4] = "Ya disponible";
            }else {
                $animes[$i][4] = "Proximamente";

            }
    }

    //Ordenar los animes 



    ?>
    <table>
        <caption>Animes</caption>
        <thead>
            <th>Titulo</th>
            <th>Genero</th>
            <th>Año</th>
            <th>Episodios</th>
            <th>Disponibilidad</th>
        </thead>
        <tbody>
            <?php
                foreach ($animes as $anime) {
                    list($titulo, $genero, $año, $episodios, $disponibilidad) = $anime;
                    echo "<tr>";
                    echo "<td>$titulo</td>";
                    echo "<td>$genero</td>";
                    echo "<td>$año</td>";
                    echo "<td>$episodios</td>";
                    echo "<td>$disponibilidad</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

</body>
</html>