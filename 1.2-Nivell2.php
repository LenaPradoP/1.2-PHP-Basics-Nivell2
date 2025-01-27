<?php 
declare(strict_types = 1);

echo "S1.T2.N2 Ejercicio 1" .PHP_EOL .PHP_EOL;
define('MINIMUN_TIME', 3);
define('STARTING_COST', 0.10);
define('EXTRA_MINUTE_COST', 0.05);

echo calculateCost(5);

function calculateCost(float $callTime) : string {

    if ($callTime <= 0) {
        return "El tiempo de llamada no ha sido registrado" .PHP_EOL;
    } else if ($callTime <= 3) {
        return "El coste de la llamada es " . STARTING_COST . "€" .PHP_EOL;
    } else {
        return "El coste de la llamada es " . (STARTING_COST + ($callTime - MINIMUN_TIME) * EXTRA_MINUTE_COST). "€" .PHP_EOL;
    }
}

echo "S1.T2.N2 Ejercicio 2" .PHP_EOL .PHP_EOL;

define('CHOCOLATE_PRICE', 1);
define('GUM_PRICE', 0.5);
define('CANDY_PRICE', 1.5);

echo calculateTotal(calculateChocolate(5), calculateGum(3), calculateCandy(1));
echo calculateTotal(calculateChocolate(5), calculateCandy(1));

function calculateChocolate(int $chocolateAmount) : float {
    $chocolateCost = $chocolateAmount * CHOCOLATE_PRICE;

    echo "Chocolate $chocolateAmount x " . CHOCOLATE_PRICE . "€ = $chocolateCost" . '€' .PHP_EOL;

    return $chocolateCost;
}

function calculateGum(int $gumAmount) : float {
    $gumCost = $gumAmount * GUM_PRICE;
    
    echo "Chicle $gumAmount x " . GUM_PRICE . "€ = $gumCost" . '€' .PHP_EOL;

    return $gumCost;
}

function calculateCandy(int $candyAmount) : float {
    $candyCost = $candyAmount * CANDY_PRICE;

    echo "Caramelo $candyAmount x " . CANDY_PRICE . "€ = $candyCost" . '€' .PHP_EOL;

    return $candyCost;
}

function calculateTotal(float $chocolateCost = 0, float $gumCost = 0, float $candyCost = 0) : string {
    $totalCost = $chocolateCost + $gumCost + $candyCost;

    return "Precio total = $totalCost" .'€' .PHP_EOL .PHP_EOL;
}

?>