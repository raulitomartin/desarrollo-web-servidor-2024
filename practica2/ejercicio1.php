<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion animes y estudios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    ?>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <?php
        function depurar($entrada) {
            if ($entrada == null) {
                return "";
            }
            $salida = htmlspecialchars($entrada); // Para que no lleguen scripts o cosas raras que no queremos
            $salida = trim($salida); // Elimina los espacios de antes y despues
            $salida = stripslashes($salida); // Elimina las barras invertidas () de la cadena
            $salida = preg_replace('!\s+!', ' ', $salida); // Reemplaza cualquier cantidad de espacios en blanco por un solo espacio.
            return $salida;
        }
    ?>
    <?php
    $estudios = ["NO", "SI"];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tmp_titulo = depurar($_POST["titulo"]);
        $tmp_anno_estreno = depurar($_POST["anno_estreno"]);
        $tmp_num_temporadas = depurar($_POST["num_temporadas"]);
        $tmp_sinopsis = depurar($_POST["sinopsis"]);



        /* Validacion del campo titulo */
        if ($tmp_titulo == '') { //Valido que el usuario no deje el campo vacio
            $err_titulo = "No puedes dejar el campo del titulo vacio";
        } else {
            $patron = "/^[a-zA-Z][1-9 áéióúÁÉÍÓÚñÑüÜñÑ][,.;]+$/";
            if (preg_match($patron,$tmp_titulo)) {
                $err_titulo = "No admiten carecteres especiales";
            } else {
                if (strlen($tmp_titulo) < 1 || strlen($tmp_titulo) > 40) {
                    $err_titulo = "Minimo 1 caracter maximo 40";
                } else {
                    $titulo = $tmp_titulo;
                }
            }
        }

        //GENERO
        if (isset($_POST["genero"])) {
            $tmp_genero = depurar($_POST["genero"]);
        } else {
            $tmp_genero = "";
        }

        if ($tmp_genero == '') {
            $err_genero = "Tienes que elegir un genero";

        } else{
            /* Array de las consolas disponibles que hay en los radio button */
            $listaGeneros=["fantasia", "ciencia_ficcion", "romance", "drama"];
            /* Comparo lo que ha puesto el usuario con la lista de las consolas*/
            if(!in_array($tmp_genero, $listaGeneros)){
                $err_genero = "El genero no es valido";
                 
            } else {
                $genero = $tmp_genero;
              
            }
        }


        //validacion sinopsis
        if ($tmp_sinopsis == "") {
            $sinopsis = "";
            
        } else {
            $patrons =  "/^[a-zA-Z áéióúÁÉÍÓÚñÑüÜñÑ ]+$/";
            if (!preg_match($patrons, $tmp_sinopsis)) {
                $err_sinopsis = "solo puedes poner letras con tilde espacios en blanco y la letra ñ";
                
            } else {
                
                $sinopsis = $tmp_sinopsis;
            }
        }



        /* Validacion del campo si o no */
        if (isset($_POST["nombre_estudio"])) { //Si existe el post de nombre estudio en el formulario del select creo tmp con lo que hay dentro del select
            $tmp_nombre_estudio = $_POST["nombre_estudio"];
        } else { //Si no existe tmp esta vacio y me sirve para validarlo luego
            $tmp_nombre_estudio = $estudios[0];
        }

        if ($tmp_nombre_estudio == '') { //Si tmp esta vacio creo la variable del error
            $nombre_estudio = $estudios[0];
        } else {

            if (!in_array($tmp_nombre_estudio, $estudios)) { // Si el nombre del estudio no esta en el array creo la variable del error
                $err_nombre_estudio = "Selecciona una de las opciones validas";
            } else { //Final feliz
                $nombre_estudio = $tmp_nombre_estudio;
            }
        }



        //Validacion campo anno_estreno
        if ($tmp_anno_estreno == '') { //Si esta vacio el anno del estreno no es nada ya que el campo es opcional
            $anno_estreno = "";
        } else {
            if (!is_numeric($tmp_anno_estreno)) { //Compruebo que lo que ponen en el campo son numeros
                $err_anno_estudio = "Solo se admiten numeros";
            } else {
                $anno = date("Y");
                if ($tmp_anno_estreno >= 1800 && $tmp_anno_estreno <= ($anno +3)) { //Compruebo que el anno de estreno esta entre los valores permitidos
                    $anno_estreno = $tmp_anno_estreno;
                } else { //Final troste
                    $err_anno_estudio = "Ponga un anno entre 1960 y 2029";
                }
            }
        }



        /* Validacion del campo num_paginas */
        if ($tmp_num_temporadas == '') {
            $err_num_temporadas = "No puedes dejar este campo vacio";
        } else {
            if (!is_numeric($tmp_num_temporadas)) {
                $err_num_temporadas = "Tienes que poner un valor numerico";
            } else {
                if ($tmp_num_temporadas < 10 || $tmp_num_temporadas > 9999) {
                    $err_num_temporadas = "Debes poner un numero entre 10 y 9999";
                } else {
                    $num_temporadas = $tmp_num_temporadas;
                }
            }
        }
    }






    ?>


    <h2>Formulario Animes</h2>
    <form class="col-4" method="post" action="">
        <!-- Formulario titulo -->
        <div>
            <label class="mb3">Titulo</label>
            <input type="text" class="form-control" name="titulo">
            <!-- Control de errores -->
            <?php
            if (isset($err_titulo)) {
                echo "<span class = 'error'>$err_titulo</span>";
            }
            ?>
        </div>

        <div>
            <label class="mb3">Paginas</label>
            <input type="text" class="form-control" name = "num_temporadas">
            <!-- Control de errores -->
             <?php
                if(isset($err_num_temporadas)){
                    echo "<span class = 'error'>$err_num_temporadas</span>";
                }
             ?>
        </div>

        <div>
            <label class ="mb3">Genero</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="genero" id="fantasia" value="fantasia" >
                <label class="form-check-label" for="fantasia">
                    FANTASIA    
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="genero" id="ciencia_ficcion" value="ciencia_ficcion" >
                <label class="form-check-label" for="ciencia_ficcion">
                    CIENCIA FICCION
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="genero" id="romance" value="romance">
                <label class="form-check-label" for="romance">
                    ROMANCE
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="genero" id="drama" value="drama">
                <label class="form-check-label" for="drama">
                    DRAMA
                </label>
            </div>
            <?php if(isset($err_genero)) echo "<span class = 'error'>$err_genero</span>"?>
        </div>


        <!-- Formulario nombre_estudio -->
        <div>
            <label class="mb3">Tiene Secuela:</label>
            <select name="nombre_estudio" id="nombre_estudio">
                <!-- Array con los nombre de los animes -->
                <?php
                //Array con los estudios
                //Opciones del select
                foreach ($estudios as $estudio) {
                    echo "<option value = '$estudio'>$estudio</option>";
                }


                ?>
            </select>
            <!-- Control de errores -->
            <?php
            if (isset($err_nombre_estudio)) {
                echo "<span class = 'error'>$err_nombre_estudio</span>";
            }

            ?>
        </div>
        <div>
            <label class = "mb3">Sinopsis:</label>
            <Textarea type = "text" name = "sinopsis"></Textarea>
            <?php
                if (isset($err_sinopsis)) {
                    echo "<span class = 'error'>$err_sinopsis</span>";
                }
            ?>
        </div>


        <!-- Anno de estreno campo opcional -->





        <!-- Boton de enviar -->
        <div class="mb-3">
            <input class="btn btn-primary" type="submit" value="ENVIAR">
        </div>


        
        <!-- RESULTADOS -->
        <div class="mb3">
            <?php
                if (isset($titulo) && isset($num_temporadas) && isset($genero) && isset($nombre_estudio) && isset($sinopsis)) {
                    echo "<h3> El titulo es:$titulo</h3>";
                    echo "<h3>EL numero de paginas es $num_temporadas</h3>";
                    echo "<h3>El genero es: $genero</h3>";
                    echo "<h3>Tiene secuela: $nombre_estudio</h3>";
                    echo "<h3>La sinopsis es: $sinopsis</h3>";
                } else {
                    echo "<h1 class = 'error'>Rellene todos los campos porfavor</h1>";
                }
            ?>
        </div>

    </form>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>