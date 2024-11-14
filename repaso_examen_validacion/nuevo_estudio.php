<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo_estudio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tmp_nombre_estudio = $_POST["nombre_estudio"];
            $tmp_ciudad = $_POST["ciudad"];

            if ($tmp_nombre_estudio == '') {
                $err_nombre_estudio = "No puedes dejar este campo vacio";
            } else {
                $patron = "/^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ1-9 ]+$/";
                if (!preg_match($patron,$tmp_nombre_estudio)) {
                    $err_nombre_estudio = "solo puedes poner letras numeros y espacios en blanco";
                } else {
                    $nombre_estudio = $tmp_nombre_estudio;
                }
            }



            if ($tmp_ciudad == '') {
                $err_ciudad = "No puedes dejar este campo vacio";
            } else {
                $patron = "/^[a-zA-Z ]+$/";
                if (!preg_match($patron,$tmp_ciudad)) {
                    $err_ciudad = "Solo puedes poner letras y espacios en blanco";
                } else {
                    $ciudad = $tmp_ciudad;
                }
            }
        }
    
    ?>





    <form class="col-4" action="" method="post">
        <div>
            <label class="mb3">Nombre del estudio</label>
            <input type="text" class="form-control" name = "nombre_estudio">
            <?php
                if (isset($err_nombre_estudio)) {
                    echo "<span class = 'error'>$err_nombre_estudio</span>";
                }
            ?>
        </div>
        <div>
            <label class="mb3">ciudad</label>
            <input type="text" class="form-control" name="ciudad">
            <?php
                if (isset($err_ciudad)) {
                    echo "<span class = 'error'>$err_ciudad</span>";
                }
            ?>
        </div>
        <div>
            <input type="submit" class="btn btn-primary" value="ENVIAR">
        </div>
    </form>
        <?php
            if (isset($nombre_estudio) && isset($ciudad)) {
                echo "<h3>$nombre_estudio</h3>";
                echo "<h3>$ciudad</h3>";
            } else {
                echo "<h3>Rellene todos los campos</h3>";
            }
        ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>