<?php
    function ponten($exponente, $base){
        $resultado = 1;
        for ($i=0; $i < $exponente; $i++) { 
            $resultado *= $base;
            
        }
        echo "<h1>El resultado es: $resultado</h1>";
    }
?>