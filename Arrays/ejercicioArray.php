<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Arrays</title>
    <link rel="stylesheet" href="./estilo.css">
</head>
<body>
<!-- 
    EJERCICIO 1
    DESARROLLO WEB EN ENTORNO SERVIDOR => ALEJANDRA
    DESARROLLO WEN EN ENTORNO CLIENTE => JOSE MIGUEL
    DESARROLLO DE INTERFACES WEB => JOSE MIGUEL
    DESPLIEGUE DE APLICACIONES => JAIME
    EMPRESA E INICIATIVA EMPRENDEDORA => ANDREA
    INGLES => VIGINIA

    --MOSTRARLO TODO EN UNA TABLA--

    EJERCICIO 2
    FRANCISCO => 3
    AURORA => 10
    DANIEL => 5
    LUIS => 7
    SAMUEL => 9

    MOSTRAR EN UN TABLA CON 3 COLUMNAS

    COLUMNA 1 = ALUMMNO
    COLUMNA 2 = NOTA 
    COLUMNA 3 = APROBADO = VERDE SUSPENSO = ROJO.
-->
<!--EJERCICIO 1-->
    <?php
    $numRandom1 = rand(0, 10);//Numero aleatorio para las notas de los 2 nuevos alumnos
    $numRandom2 = rand(0, 10);//Numero aleatorio para las notas de los 2 nuevos alumnos

    //Array de profesores
    $profesores = [
        "Jose Miguel" => "Desarrollo web en entorno cliente",
        "Jose Miguel" => "Desarrollo de interfaces web",
        "Alejandra" => "Desarrollo web en entorno servidor",
        "Jaime" => "Despliegue de aplicaciones",
        "Andrea" => "Empresa e iniciativa emprendedora",
        "Virginia" => "Inglés"
    ];
    ?>

    
    <?php //Array de alumnos
        $alumnos = [
            "Francisco" => "3",
            "Aurora" => "10",
            "Daniel" => "5",
            "Luis" => "7",
            "Samuel" => "9"
        ];

        print_r($alumnos);//Muestro por pantalla para saber si han salido bien los alumnos.
    ?>

    <h1>EJERCICIO 1</h1>

<!-- Aqui empieza la tabla -->
<table>
    <caption>Profesor y asignatura</caption>
    <thead>
        <tr>
            <th>Profesor</th>
            <th>Asignatura</th>
        </tr>
        <tbody>
            <?php
            foreach ($profesores as $profesor => $asignatura) { // foreach para recorrer el array de profesores (array as clave => lo que hay dentro de la clave)?>  
                <tr>
                    <td><?php echo $profesor?></td>
                    <td><?php echo $asignatura?></td>
                </tr>

           <?php }?>
            
        </tbody>

    </thead>
</table>
<h1>EJERCICIO 2 Y 3</h1>

<table>
    <thead>
        <tr>
            <th>Alumno</th>
            <th>Nota</th>
            <th>Aprobado/Suspenso</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($alumnos as $nombreAlu => $notaAlu) {// foreach para recorrer el array de alumnos (array as clave => lo que hay dentro de la clave)?>
            <tr>
                <td><?php echo $nombreAlu?></td>
                <td><?php echo $notaAlu?></td>
                <td>
                    <?php
                        if ($notaAlu >= 5) {//Si la nota del alumnos es mayor o igual a 5 aprobado else CAGASTE MARICON.
                            echo "aprobado";
                        }else {
                            echo "suspenso";
                        }
                    
                    
                    ?>

                </td>                
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php
    //Inserto a dos nuevos alumnos.
    $alumnos["Raulito"] = $numRandom1;
    $alumnos["Agustin"] = $numRandom2; 

?>



<!-- Muestro los alumnos para saber si estan bien puestos -->
<h1>Muestro la tabla con los dos nuevos alumnos</h1>
<table>
    <thead>
        <tr>
            <th>Alumno</th>
            <th>Nota</th>
            <th>Aprobado/Suspenso</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($alumnos as $nombreAlu => $notaAlu) {// foreach para recorrer el array de alumnos (array as clave => lo que hay dentro de la clave)?>
            <tr>
                <td><?php echo $nombreAlu?></td>
                <td><?php echo $notaAlu?></td>
                <td>
                    <?php
                        if ($notaAlu >= 5) {//Si la nota del alumnos es mayor o igual a 5 aprobado else CAGASTE MARICON.
                            echo "aprobado";
                        }else {
                            echo "suspenso";
                        }
                    
                    
                    ?>

                </td>                
            </tr>
        <?php } ?>
    </tbody>
</table>

<!-- Borro un estudiante por su clave -->
 <h1>Borrar un estudiante por su clave</h1>

 <?php
    unset($alumnos["Raulito"]); //Con usent elimino a un alumno por su clave, en este caso la clave es un nombre.
 ?>

 <!-- Muestro la tabla con los alumnos -->


 <table>
    <thead>
        <tr>
            <th>Alumno</th>
            <th>Nota</th>
            <th>Aprobado/Suspenso</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($alumnos as $nombreAlu => $notaAlu) {// foreach para recorrer el array de alumnos (array as clave => lo que hay dentro de la clave)?>
            <tr>
                <td><?php echo $nombreAlu?></td>
                <td><?php echo $notaAlu?></td>
                <td>
                    <?php
                        if ($notaAlu >= 5) {//Si la nota del alumnos es mayor o igual a 5 aprobado else CAGASTE MARICON.
                            echo "aprobado";
                        }else {
                            echo "suspenso";
                        }
                    
                    
                    ?>

                </td>                
            </tr>
        <?php } ?>
    </tbody>
</table>

<!-- Ordeno el array con asort alfabeticamente -->
<h1>Array ordenado alfabeticamente</h1>


<?php
    asort($alumnos);
?>


<table>
    <thead>
        <tr>
            <th>Alumno</th>
            <th>Nota</th>
            <th>Aprobado/Suspenso</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($alumnos as $nombreAlu => $notaAlu) {// foreach para recorrer el array de alumnos (array as clave => lo que hay dentro de la clave)?>
            <tr>
                <td><?php echo $nombreAlu?></td>
                <td><?php echo $notaAlu?></td>
                <td>
                    <?php
                        if ($notaAlu >= 5) {//Si la nota del alumnos es mayor o igual a 5 aprobado else CAGASTE MARICON.
                            echo "aprobado";
                        }else {
                            echo "suspenso";
                        }
                    
                    
                    ?>

                </td>                
            </tr>
        <?php } ?>
    </tbody>
</table>

<!-- Todo ordenado por la nota del 10 al 0 (orden inverso) -->
<?php
    arsort($alumnos);
?>
<h1>Nota ordenada (orden inverso)</h1>
<table>
    <thead>
        <tr>
            <th>Alumno</th>
            <th>Nota</th>
            <th>Aprobado/Suspenso</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($alumnos as $nombreAlu => $notaAlu) {// foreach para recorrer el array de alumnos (array as clave => lo que hay dentro de la clave)?>
            <tr>
                <td><?php echo $nombreAlu?></td>
                <td><?php echo $notaAlu?></td>
                <td>
                    <?php
                        if ($notaAlu >= 5) {//Si la nota del alumnos es mayor o igual a 5 aprobado else CAGASTE MARICON.
                            echo "aprobado";
                        }else {
                            echo "suspenso";
                        }
                    
                    
                    ?>

                </td>                
            </tr>
        <?php } ?>
    </tbody>
</table>








</body>
</html>