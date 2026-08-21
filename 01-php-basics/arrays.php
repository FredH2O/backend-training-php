<?php

$user = [
    "name" => "Fred",
    "age" => 32,
    "skills" => ["HTML", "CSS", "JavaScript", "PHP"],
];

$user["skills"][] = "React";
$user["age"] = 34;
$user["name"] = "Frederico";
$user["skills"][1] = "TailwindCSS";

unset($user["skills"][0]);

echo $user["name"] . "\n";
echo $user["age"] . "\n";
echo $user["skills"][0] . "\n";
echo $user["skills"][1] . "\n";

if (isset($user["skills"][0])) {
    echo $user["skills"][0] . "\n";
} else {
    echo "Skill does not exist.\n";
}

foreach ($user["skills"] as $s) {
    echo $s . "\n";
}

foreach ($user["skills"] as $index => $s) {
    echo $index . ": " . $s . "\n";
}

var_dump($user);
