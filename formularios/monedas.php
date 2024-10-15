<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors",1);
    ?>
</head>
<body>
    <form action="" method="post">
        <label for ="dinero">Dinero</label>
        <input type="texto" name="dinero" id="dinero">
        <br>
        <select name="divisaEntrada">
            <option value="euro">Euro</option>
            <option value="dolar">Dolar</option>
            <option value="yen">Yenes</option>
        </select>
        <select name="divisaSalida">
            <option value="euro">Euro</option>
            <option value="dolar">Dolar</option>
            <option value="yen">Yenes</option>
        </select>
        <br>
        <input type="submit" value="Convertir">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $dinero = $_POST["dinero"];
            $divisaEntrada = $_POST["divisaEntrada"];
            $divisaSalida = $_POST["divisaSalida"]; 
            
            /* Este match sustituye al if  */
            $result = match([$divisaEntrada,$divisaSalida]){
                ["euro","dolar"] => $dinero *= 1.09,
                ["euro","yen"] => $dinero *= 163.38,
                ["dolar","euro"] => $dinero *= 0.92,
                ["dolar","yen"] => $dinero *= 149.67,
                ["yen","euro"] => $dinero *= 0.0061,
                ["yen","dolar"] => $dinero *= 0.0067
            };

            echo"<p>$result</p>";
        }

    
    ?>
</body>
</html>