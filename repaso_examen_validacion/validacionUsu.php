<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validacion de formularios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <?php
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    
    ?>
    <style>
        .error{
            color: red;
        }

    </style>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tmp_dni = $_POST["dni"];
            $tmp_nombre = $_POST["nombre"];
            $tmp_apellidos = $_POST["apellidos"];
            $tmp_edad = $_POST["edad"];
            $tmp_correo = $_POST["correo"];
            //VALIDACION DNI
            if ($tmp_dni == '') {//Si el campo dni esta vacio salta el error
                $err_dni = "El DNI es obligatorio";
            } else {
                $tmp_dni = strtoupper($tmp_dni); //Paso a mayusculas el dni del usuario
                $patron = "/^[0-9]{8}[A-Z]$/";//Expresion regular del dni.
                //Comparo el formulario con la expresion regular con preg_match

                if (!preg_match($patron, $tmp_dni)) {
                    $err_dni = "El dni esta mal son 8 numeros y una letra ";
                }else {
                    $numero_dni = (int)substr($tmp_dni,0,8);//cojo los numeros del dni.
                    $letra_dni = substr($tmp_dni,8,1); //cojo la letra del DNI
                    /*para saber si el dni es valido se divide el número
                    entero del DNI entre 23. Se coge el resto. El resto
                    será siempre un número. Ese número determinará la letra
                    final del DNI
                    */
                    $resto_dni = $numero_dni% 23;
                    $letras_dni = "TRWAGMYFPDXBNJZSQVHLCKE";//letras validas del dni ordenadas en funcion al resultado
                    $letra_correcta = substr($letras_dni, $resto_dni,1);
                    if ($letra_dni != $letra_correcta) {
                        $err_dni = "El dni no es valido (la letra no es correcta)";
                    } else {
                        $dni = $tmp_dni;
                    }
                }
            }



            //VALIDACION NOMBRE
            if ($tmp_nombre == '') { //Si el nombre esta vacio se crea err_nombre
                $err_nombre = "No puedes dejar el campo nombre vacio";

            } else { //Si no esta vacio el campo nombre empiza la validacion
                if (strlen($tmp_nombre) < 2 || strlen($tmp_nombre) > 40) { //Me aseguro que el nombre este entre los 2 y los 40 caracteres
                    $err_nombre = "ERROR: tiene que ser de 2 a 40 caracteres";
                } else {
                    //Expresion regular para el nombre, no se admiten caracteres especiales
                    $patron = "/^[a-zA-Z áéióúÁÉÍÓÚñÑüÜ]+$/";
                    if (!preg_match($patron, $tmp_nombre)) {
                        $err_nombre = "solo puede tener letras y espacios en blanco";
                        
                    } else {
                        //Paso la primera letra del nombre a mayusculas y el resto a minusculas
                        $nombre = ucfirst(strtolower($tmp_nombre));
                    }
                }
            }



            //VALIDACION APELLLIDOS
            if ($tmp_apellidos == '') { //Si el apellido esta vacio se crea err_apellidos
                $err_apellidos = "No puedes dejar el campo vacio";
            } else { //Si no esta vacio comienza la validacion
                if (strlen($tmp_apellidos) < 2 || strlen($tmp_apellidos) > 40) {
                    $err_apellidos = "Entre 2 y 40 carecteres porfavor";
                } else {
                    //Expresion regular para el apellido, no se admiten caracteres especiales.
                    $patron = "/^[a-zA-Z áéióúÁÉÍÓÚñÑüÜ]+$/";
                    if (!preg_match($patron, $tmp_apellidos)) {
                        $err_apellidos = "Solo letras y espacios, no se vale caracteres especiales";
                    } else{
                        //Primera letra mayuscula y el resto en minuscula
                        $apellidos = ucfirst(strtolower($tmp_apellidos));    
                    }
                }
            }


            //VALIDACION EDAD
            if ($tmp_edad == '') { //Si deja el campo vacio se crea la variable de error
                $err_edad = "No puedes dejar el campo vacio";
            } else { //Si no esta vacio comienza la validacion.
                $patron = "/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/";//expresion regular del correo
                if (!preg_match($patron,$tmp_edad)) {//controlo que coincida el correo del usuario con la validacion
                    $err_edad = "Formato incorrecto";
                } else {
                    $fecha_actual = date("Y-m-d");
                    list($anno_actual,$mes_actual,$dia_actual) = explode('-', $fecha_actual);
                    list($anno,$mes,$dia) = explode('-', $tmp_edad);

                    if ($anno_actual - $anno > 18) {
                        $err_edad = "No puedes ser menor de edad";
                    }elseif ($anno_actual - $anno == 0) {
                        if ($mes_actual - $mes <= 0) {
                            $err_edad = "No puedes ser menor de edad";
                        } elseif ($mes_actual - $mes == 0) {
                            
                            if ($dia_actual - $dia < 0) {
                                $err_edad = "No puedes ser menor de edad";
                            }
                        } elseif ($mes_actual - $mes > 0) {
                            $edad = $tmp_edad;
                        }
                    }elseif ($mes_actual - $anno > 121) {
                        $err_edad = "No puedes tener mas de 120 annos";
                    }
                }
            }


            //Validacion correo electronico
            if ($tmp_correo == '') {
                $err_correo = "No puedes dejar el correo vacio";
            } else {
                $patron = "/^[a-zA-Z0-9_\-.+]+@([a-zA-Z0-9-]+.)+[a-zA-Z]+$/";
                if (!preg_match($patron, $tmp_correo)) {
                    $err_correo = "Formato de correo no valido";
                } else {
                    $palabras_baneada = ["retruecanos", "carapeo","recorcholis,","caracoles","repampanos"];

                    $palabras_encontradas = "";

                    foreach ($palabras_baneada as $palabra_baneada) {
                        if (str_contains($tmp_correo, $palabra_baneada)) {
                            $palabras_encontradas = "$palabra_baneada,  . $palabras_encontradas";
                        }

                        if ($palabras_encontradas != '') {
                            $err_correo = "No se permiten las palabras: $palabras_encontradas";
                        } else {
                            $correo = $tmp_correo;
                        }

                    }
                }
            }

        }

        
    ?>






    <form class="col-4" action = "" method = "post">
        <div> <!-- Formulario DNI -->
            <label class="mb3">DNI</label>
            <input class="form-control" type="text" name="dni">
            <?php //control de errores
                if (isset($err_dni)) { //Si err_dni esta creada salta el error en funcion a lo que haya fallado el usuario
                    echo "<span class = 'error'>$err_dni</span>";
                }
            ?>
        </div>

        
        <!-- Formulario NOMBRE -->
        <div>
            <label class="mb3">Nombre</label>
            <input type="text" class="form-control" name="nombre">
            <?php //control de errores
                if (isset($err_nombre)) { //Si err_ nombre esta creada salta el error un funcion a como la cague el usuario
                    echo "<span class = 'error'>$err_nombre</span>";
                }
            ?>
        </div>


        <!-- Formulario apellidos  -->
        <div>
            <label class="mb3">Apellidos</label>
            <input type="text" class="form-control" name="apellidos">
            <?php //control de errores
            if (isset($err_apellidos)) {
                echo "<span class = 'error'>$err_apellidos</span>";
            }
            ?>
        </div>


        <!-- Formulario edad -->
        <div>
            <label class = "mb3">Introduzca su edad</label>
            <input type="date" class="form-control" name="edad">
            <?php
                if (isset($err_edad)) {
                    echo "<span class = 'error'>$err_edad</span>";
                }
            ?>
        </div>


        <!-- Formulario correo electronico -->
        <div>
            <label class="mb3">Correo electronico</label>\
            <input type="text" class="form-control" name = "correo">
            <?php
                if (isset($err_correo)) {
                    echo "<span class = 'error'>$err_correo</span>";
                }
            
            ?>                
        </div>

        <!-- BOTON ENVIAR -->
        <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Enviar">
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>