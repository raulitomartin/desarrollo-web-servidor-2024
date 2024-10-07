<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays bidimensionales</title>
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1);
    ?>
    <link rel="stylesheet" href="./estilo.css">
</head>
<body>
    <?php
        $videoJuegos = [
            ["Disco Elysium", "RPG", 9.99],
            ["Dragon Ball Z Kakarot", "Accion", 59.99],
            ["Persona 3", "RPG", 24.99],
            ["Comando 2", "Estrategia", 9.99],
            ["Hollow Knight", "Metroidvania", 9.99],
            ["Stardew Valley", "Gestion de recursos", 7.99]
    ];
    $nuevo_videojuego = ["Octopath Traveler", "RPG", 29,95];
    array_push($videoJuegos, $nuevo_videojuego);
    //ORDENAR EL ARRAY
    
        $_titulo = array_column($videoJuegos, 0);
        //$_categoria = array_column($videojuegos, 1);
        //$_precio = array_column ($videojuegos, 2);

        array_multisort($titulo, SORT_ASC, $videoJuegos);
        //array_multisort($categoria, SORT_ASC, $videoJuegos);
        //array_multisort($precio, SORT_ASC, $videoJuegos);
    // unset($videoJuegos[3]);

    array_push($videoJuegos, ["Dota 2", "MOBA",0]);
    for ($i=0; $i < count($videoJuegos); $i++) { 
        $videoJuegos[$i][3] = "ELAMIGOS";
        if ($videoJuegos[$i][2] <= 0) {
            $videoJuegos[$i][3] = "Gratis";
        }
    }
    
    
    ?>

    <table>
        <thead>
            <th>VideoJUego</th>
            <th>Categoria</th>
            <th>Precio</th>
            <th>Gratis?</th>
        </thead>
        <tbody>
            <?php
                foreach ($videoJuegos as $videoJuego) {
                    list($titulo, $categoria, $precio, $gratis) = $videoJuego;
                    echo "<tr>";
                    echo "<td>$titulo</td>";
                    echo "<td>$categoria</td>";
                    echo "<td>$precio</td>";
                    echo "<td>$gratis</td>";
                    echo "</tr>";
                }
            
            
            ?>
        </tbody>
    </table>
</body>
</html>