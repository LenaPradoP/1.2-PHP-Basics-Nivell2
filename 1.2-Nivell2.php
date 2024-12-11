<?php 
declare(strict_types = 1);

echo "S1.T2.N2 Ejercicio 1" .PHP_EOL .PHP_EOL;

    $minutes = 7;

    echo "El coste de la llamada es de " . calculateCost($minutes) . "€.".PHP_EOL .PHP_EOL;

    function calculateCost(int $minutes) :  float {
        define('INITIAL_COST', 0.10);
        define('EXTRA_MINUTE_COST', 0.05);

        if ($minutes <= 3) {
            $cost = INITIAL_COST;
        } else {
            $cost = INITIAL_COST;
            $cost += ($minutes - 3) * EXTRA_MINUTE_COST;
            }

        return $cost;
    }
    echo "S1.T2.N2 Ejercicio 2" .PHP_EOL .PHP_EOL;
        define('PRICE_CHOCOLATE', 1.00);
        define('PRICE_GUM', 0.50);
        define('PRICE_CARAMEL', 1.50);

        $chocolate = 3;
        $gum = 5;
        $caramel = 2;

        echo "El total de la compra es de: ".PHP_EOL 
            . calculateChocolate($chocolate) . " + " 
            . calculateGum($gum) . " + "
            . calculateCaramel($caramel) . " = "
            . calculateTotal($chocolate, $gum, $caramel).PHP_EOL;

        function calculateChocolate(int $chocolate) : float {
            return $chocolate * PRICE_CHOCOLATE;
        }
    
        function calculateGum(int $gum) : float {
            return $gum * PRICE_GUM;
        }

        function calculateCaramel(int $caramel) : float {
            return $caramel * PRICE_CARAMEL;
        }

        function calculateTotal(int $chocolate, int $gum, int $caramel) : float {
            return calculateChocolate($chocolate) + calculateGum($gum) + calculateCaramel($caramel);
        }

?>