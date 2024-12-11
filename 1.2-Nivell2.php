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
    echo "S1.T2.N2 Ejercicio 2" .PHP_EOL;
        $chocolate = 3;
        $gum = 5;
        $caramel = 2;

        echo "El total de la compra es de: ".PHP_EOL 
            . calculateChocolate($chocolate) . " + " 
            . calculateGum($gum) . " + "
            . calculateCaramel($caramel) . " = "
            . calculateTotal($chocolate, $gum, $caramel).PHP_EOL;

        function calculateChocolate(int $chocolate) : float {
            return $chocolate * 1;
        }
    
        function calculateGum(int $gum) : float {
            return $gum * 0.5;
        }

        function calculateCaramel(int $caramel) : float {
            return $caramel * 1.5;
        }

        function calculateTotal(int $chocolate, int $gum, int $caramel) : float {
            return calculateChocolate($chocolate) + calculateGum($gum) + calculateCaramel($caramel);
        }


?>