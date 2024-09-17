<?php

/** functions */

declare(strict_types=1);

function somar(int|float $a, int|float $b)
{
    return $a + $b;
}

echo somar(10.8, 10);
