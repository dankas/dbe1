<?php
   
        $altura = floatval($_POST["altura"]);
        $sexo = intval($_POST["sexo"]);
        
        if ($sexo == 1) {
            // Fórmula para mulheres
            $peso_ideal = (62.1 * $altura) - 44.7;
        } else if ($sexo == 2) {
            // Fórmula para homens
            $peso_ideal = (72.7 * $altura) - 58;
        } else {
            $peso_ideal = "Sexo inválido.";
        }
        
        echo "<h2>Peso Ideal: " . $peso_ideal . " kg</h2>";
   
    ?>