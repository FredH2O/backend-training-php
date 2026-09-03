<?php

function greet(string $firstName, string $lastName = "Huertas"): string
{
    return "Hello there, $firstName $lastName";
}

echo greet('Frederico', 'Smith') . PHP_EOL;
echo greet('Frederico') . PHP_EOL;

function introduce(string $name, string $role = "Web Developer"): string
{
    return "Hi my name is $name and I am a $role";
}

echo introduce("Fred", "Web Dev") . PHP_EOL;
echo introduce("Frederico!") . PHP_EOL;

// calculation

function calculate(float|int $x, float|int $y)
{
    return $x + $y;
}

$result = calculate(15, 20);
echo "The total bill is $result" . PHP_EOL;

function calculateExampleTax(float|int $x, float|int $y, float $a = 10): float|int
{
    return $x * $y % $a;
}

$calculatedTax = calculateExampleTax(10, 20, 30);
$calculatedTax2 = calculateExampleTax(10, 20,);

echo $calculatedTax . PHP_EOL;
echo $calculatedTax2 . PHP_EOL;

function calculateTax(float $price, float $taxPrice = 10): float|int
{
    return $price * ($taxPrice / 100);
}

$resultTax = calculateTax(100, 20);
$resultTax2 = calculateTax(1000);

echo 'Result tax ' . $resultTax . PHP_EOL;
echo 'Result tax ' . $resultTax2 . PHP_EOL;

function multiplyNumbersOnly(int $a, int $b): int
{
    return $a * $b;
}

// $whatsTheNumber = multiplyNumbersOnly(1, 2);
// $notANumber = multiplyNumbersOnly("abc", 20);

// echo 'the number is ' . $whatsTheNumber;
// echo 'wrong output ' . $notANumber;

function isLegalToDrive(int $age): bool
{
    return $age >= 18;
}

$person1 = isLegalToDrive(17);
$person2 = isLegalToDrive(22);

var_dump($person1);
var_dump($person2);

echo "Heyy Katie, you think you can drive today ?" . PHP_EOL;
echo "Katie: " . ($person1 ? 'Yes, old enought to drive' : 'Nope, not old enough') . PHP_EOL;
echo "Willie: " . (!$person2 ? 'No, not old enough' : 'Let me drive, im old enough') . PHP_EOL;
