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
    $profesores = [
        "Jose Miguel" => "Desarrollo web en entorno cliente",
        "Jose Miguel" => "Desarrollo de interfaces web",
        "Alejandra" => "Desarrollo web en entorno servidor",
        "Jaime" => "Despliegue de aplicaciones",
        "Andrea" => "Empresa e iniciativa emprendedora",
        "Virginia" => "Inglés"
    ];
    ?>
        <?php
        $alumnos = [
            "Francisco" => "3",
            "Aurora" => "10",
            "Daniel" => "5",
            "Luis" => "7",
            "Samuel" => "9"
        ];

        print_r($alumnos);
    ?>

    <h1>EJERCICIO 1</h1>
<table>
    <caption>Profesor y asignatura</caption>
    <thead>
        <tr>
            <th>Profesor</th>
            <th>Asignatura</th>
        </tr>
        <tbody>
            <?php
            foreach ($profesores as $profesor => $asignatura) {?>
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
        foreach ($alumnos as $nombreAlu => $notaAlu) {?>
            <tr>
                <td><?php echo $nombreAlu?></td>
                <td><?php echo $notaAlu?></td>
                <td>
                    <?php
                        if ($notaAlu >= 5) {
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