<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1);
    ?>
</head>
<body>
    <!--
        CREAR UN FORMULARIO QUE RECIBA EL NOMBRE Y LA EDAD DE UNA PERSONA
        
        SI LA EDAD ES MENOR QUE 18, SE MOSTRARA EL NOMBRE Y QUE ES MENOR DE EDAD

        SI LA EDAD ESTA ENTRE 18 Y 65, SE MOSTRARA EL NOMRBE Y QUE ES MAYOR DE EDAD

        SI LA EDAD ES MAS DE 65, SE MOSTRARA EL NOMBRE Y QUE SE HA JUBILADO
    -->


    <form action="" method = "post">
        <label for="nombre">Nombre</label>
        <input type="text" name = "nombre" id = "nombre">
        <br>
        <br>
        <label for="edad">Edad</label>
        <input type="text" name = "edad" id="edad">
        <br>
        <br>
        <input type="submit" value ="Enviar">

    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD" ] == "POST") {
            $nombreUsu = $_POST["nombre"];
            $edadUsu = $_POST["edad"];
            
            
            if ($edadUsu < 18) {
                echo "<h1>$nombreUsu es menor de edad</h1>";
            }elseif ($edadUsu > 18 && $edadUsu < 60) {
                echo "<h1>$nombreUsu es mayor de edad</h1>";
            }elseif ($edadUsu > 65) {
                echo "<h1>$nombreUsu se ha jubilado</h1>";
            }
        }

    ?>
</body>
</html>