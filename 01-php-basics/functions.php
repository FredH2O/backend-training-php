<?php

function greet($firstName, $lastName = "Huertas")
{
    return "Hello there, $firstName $lastName";
}

echo greet('Frederico', 'Smith') . PHP_EOL;
echo greet('Frederico') . PHP_EOL;

function introduce($name, $role = "Web Developer")
{
    return "Hi my name is $name and I am a $role";
}

echo introduce("Fred", "Web Dev") . PHP_EOL;
echo introduce("Frederico!") . PHP_EOL;

// calculation

function calculate($x, $y)
{
    return $x + $y;
}

$result = calculate(15, 20);
echo "The total bill is $result" . PHP_EOL;

function calculateExampleTax($x, $y, $a = 10)
{
    return $x * $y % $a;
}

$calculatedTax = calculateExampleTax(10, 20, 30);
$calculatedTax2 = calculateExampleTax(10, 20,);

echo $calculatedTax . PHP_EOL;
echo $calculatedTax2 . PHP_EOL;

function calculateTax($price, $taxPrice = 10)
{
    return $price * ($taxPrice / 100);
}

$resultTax = calculateTax(100, 20);
$resultTax2 = calculateTax(1000);

echo 'Result tax ' . $resultTax . PHP_EOL;
echo 'Result tax ' . $resultTax2 . PHP_EOL;

function multiplyNumbersOnly(int $a, int $b)
{
    return $a * $b;
}

$whatsTheNumber = multiplyNumbersOnly(1, 2);
$notANumber = multiplyNumbersOnly("abc", 20);

echo 'the number is ' . $whatsTheNumber;
echo 'wrong output ' . $notANumber;
