<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo</title>
</head>
<body>
    <form action="" method="post"> <!-- SI no pones nada en el action se recarga asi misma-->

        <input type="text" name="mensaje">
        <input type="submit" value="Enviar">
        <input type="text" name="mensaje2">
        
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Este codigo se ejecua cuando el servidor recibe una peticion POST.
        echo "formulario enviado";
        $mensaje = $_POST["mensaje"];
        echo "<h1>$mensaje</h1>";
        //añadir el formulario un campo de tecto adicional para introducir
        //un numero.
        //mostrar el mensaje tantas veces como indique el numero.
        $mensaje2 = $_POST["mensaje2"];
        for ($i=0; $i < $mensaje2  ; $i++) { 
            echo "<p>$mensaje</p>";
        }
    }
    

    
    ?>
</body>
</html>