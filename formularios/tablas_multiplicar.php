<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplicar</title>
</head>
<body>
        <!--
        CREAR UN FORMULARIO QUE RECIBA UN NUMERO

        SE MOSTRARA LA TABLA DE MULTIPLICAR DE ESE NUMERO EN UNA TABLA HTML
        -->
    <form action="post">
        <label for="numUsu"></label>
        <input type="text" id ="numeroUsu">
        <input type="submit" value = "Enviar">
    </form>
    <table></table>
    <?php
        if ($_SERVER["REQUEST_METHOD" == "POST"]) {
            $numeroUsu = $_POST["numkUsu"];

            
        }
    ?>
    
        
</body>
</html>