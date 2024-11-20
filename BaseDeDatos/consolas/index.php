<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index de consolas</title>
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors", 1);

    require('conexion.php');
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class = "container">




    
    <h1>Tabla de consolas</h1>
    <?php
        $sql = "SELECT * FROM consolas";
        $resultado = $_conexion -> query($sql); //El reultado almacena una consulta
        ?>

        <table class = "table table-striped table-hover">
            <thead class ="table-dark">
                <th>Titulo</th>
                <th>Estudio</th>
                <th>Año</th>
                <th>Numero de temporadas</th>
            </thead >
            <tbody>
                <?php
                    while ($fila = $resultado -> fetch_assoc()) { //trata el resultado como un array asociativo
                        echo "<tr>";
                        echo "<td>" . $fila['nombre'] . "</td>";
                        echo "<td>" . $fila['fabricante'] . "</td>";
                        echo "<td>" . $fila['generacion'] . "</td>";
                        if ($fila["unidades_vendidas"] === null) {
                            echo "<td>NO</td>";
                        }else {
                            echo "<td>" . $fila['unidades_vendidas'] . "</td>";
                        }
                        
                        echo "</tr>";                        
                    }
                
                
                ?>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            </tbody>
        </table>
        </div>
</body>
</html>