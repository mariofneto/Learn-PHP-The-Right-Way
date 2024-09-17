<?php

declare(strict_types=1);

/** variables, anonymous & arrow functions */

function sum(int|float ...$numbers)
{
    $soma = array_sum($numbers);

    return $soma;
}

$x = 'sum';

if (is_callable($x)) {
    echo $x(10, 5, 63, 9.2);
} else {
    echo 'not callable';
}

/** ----------------- */

$array = [1, 2, 3, 4];

$array2 = array_map(fn($number) => $number *= 2, $array);

echo '<pre>';
print_r($array2);
echo '</pre>';
