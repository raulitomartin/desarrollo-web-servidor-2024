<?php
    function tablasMultiplicar($numero){
        for($i = 1; $i <= 10; $i++) {
            echo "<p>$numero x $i = " . $numero*$i . "</p>";
        }

    }
?>