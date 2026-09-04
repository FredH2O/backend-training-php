<?php

declare(strict_types=1);

function add($a, $b): int
{
    return $a + $b;
}

echo add("asd", 20) . PHP_EOL; // purpose error
