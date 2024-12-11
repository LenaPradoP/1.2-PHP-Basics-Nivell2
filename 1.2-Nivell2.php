<?php 
declare(strict_types = 1);

echo "S1.T2.N2 Ejercicio 1" .PHP_EOL;

    $minutes = 7;

    echo "El coste de la llamada es de " . calculateCost($minutes) . "€.".PHP_EOL;

    function calculateCost(int $minutes) :  float {
        $cost = 0.0;

        if ($minutes <= 3) {
            $cost = 0.10;
        } else {
            $cost = 0.10;
            for ($i = 3 ; $i < $minutes ; $i++) {
                $cost += 0.5;
            }
        }

        return $cost;
    }
?>