<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tmp_caca = $_POST["caca"];
            
        }
    
    
    
    ?>



    <form action="" method="post">
        <div>
        <label for="">caca</label>
        <input type="text" name="caca">
        </div>
        <div>
            <input type="submit" value="enviar">

        </div>

    </form>
</body>
</html>