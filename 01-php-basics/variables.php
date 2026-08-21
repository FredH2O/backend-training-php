<?php

$name = "Fred";
$age = 34;
$developer = true;
$game = "No more room in hell 2";
$plant = "Monstera";
$isGamer = true;
$faveFood = ["Chicken Adobo", "Sinigang"];

echo $name . "\n";
echo $age . "\n";
echo $developer . "\n";
echo "Hello, " . $name . "!" . "\n";
echo "I'm a gamer and my favourite game is " . $game . ". \n I also love plants my biggest one so far is " . $plant . "! But when it comes to eating my 2 favourite dishes are " . $faveFood[0] . " and " . $faveFood[1] . "!";

$weight = 87;
$height = 5.6;
$hasJob = false;

echo "My current weight " . $weight . "kg. With a height of " . $height . "' and right now I have " . ($hasJob ?  "have a job!" : "no job.");

var_dump($age);
var_dump($name);
var_dump($faveFood);
var_dump($hasJob);
var_dump($name);
var_dump($age);
var_dump($developer);
var_dump($game);
var_dump($height);
var_dump($hasJob);
var_dump($faveFood);
