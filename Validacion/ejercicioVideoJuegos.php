<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio VideoJuegos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Para que muestre los errores -->
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    ?>
</head>

<body>
    <?php
    
    /* Recojo las cosas del formulario en variables temporales */
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tmp_titulo = $_POST["titulo"];
            $tmp_fecha = $_POST["fecha_lanzamiento"];
            $tmp_pegi = $_POST["pegi"];
            $tmp_descripcion = $_POST["descripcion"];
        
            /* VALIDACION DEL TITULO */
            /* Si el titulo está vacío, muestra un mensaje de error */
            if ($tmp_titulo == '') {
                $err_titulo = "El título es obligatorio";
            } else { 
                /* Validar que el título esté entre 1 y 80 caracteres */
                if (strlen($tmp_titulo) < 1 || strlen($tmp_titulo) > 80) {
                    $err_titulo = "El título debe tener entre 1 y 80 caracteres";
                } else {
                    $titulo = $tmp_titulo;
                }
            }
            /* Validacion radio botones de los cojones */
            if (isset($_POST["consola"])) {
                $tmp_consola = $_POST["consola"];
            } else {
                $tmp_consola = "";
            }

            if ($tmp_consola == '') {
                $err_consola = "Tienes que elegir una consola pedazo de subnormal";

            } else{
                /* Array de las consolas disponibles que hay en los radio button */
                $listaConsolas=["play", "switch", "pc", "xbox"];
                /* Comparo lo que ha puesto el usuario con la lista de las consolas*/
                if(!in_array($tmp_consola, $listaConsolas)){
                    $err_consola = "La consola no es valida amigo";
                     
                } else {
                    $consola = $tmp_consola;
                  
                }
            }
        }




        



































    ?>






    <div class="container">
        <form class="col-4" action="" method="post"><!-- Formulario con cosas del bootstrap -->
            <!-- Titulo -->
             <div class="mb-3">
                <label class="form-label">Titulo</label>
                <input class="form-control" type="text" name="titulo">
                <?php if(isset($err_titulo)) echo "<span class = 'error'>$err_titulo</span>"?>
             </div>


            <!-- Tipo de consola que es un radio button -->
            <div class="form-check">
                <input class="form-check-input" type="radio" name="consola" id="play" value="play" >
                <label class="form-check-label" for="play">
                    PLAY    
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="consola" id="xbox" value="xbox" >
                <label class="form-check-label" for="xbox">
                    XBOX
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="consola" id="switch" value="switch">
                <label class="form-check-label" for="switch">
                    SWITCH
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="consola" id="pc" value="pc">
                <label class="form-check-label" for="pc">
                    PC
                </label>
            </div>
            <?php if(isset($err_consola)) echo "<span class = 'error'>$err_consola</span>"?>


            <!-- Fecha de lanzamiento -->
            <label class="form-label">Fecha de lanzamiento</label>
            <input class="form-control" type="date" name="fecha_lanzamiento">
            <div class="mb-3">
                
            </div>


            <!-- PEGI EITIN XD -->
             <div class="mb-4">
             <label class="form-label">PEGI</label>
                <select name="pegi" id="pegi">
                    <option value="pegi3">pegi 3</option>
                    <option value="pegi7">pegi 7</option>
                    <option value="pegi12">pegi 12</option>
                    <option value="pegi16">pegi 16</option>
                    <option value="pegi18">pegi 18</option>
                </select>
             </div>
            

             <div class="mb-5">
                <label class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion">
             </div>
             <input class="btn btn-primary" type="submit" value="Enviar">

    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>