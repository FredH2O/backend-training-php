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
$user["skills"][7] = "Git";

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

foreach ($user["skills"] as $index => $whateverThisIsWeirdVariableName) {
    echo $index . "::::: kapow - skills " . $whateverThisIsWeirdVariableName . "\n \n";
}

array_push($user["skills"], "Vue", "Angular", "Pooping");

$user["skills"][5] = "WordPress GOD";
$user["skills"][6] = "SEO Chimpanzini";
ksort($user["skills"]);

$upperCaseSkills = array_map(
    function ($s) {
        return strtoupper($s);
    },
    $user["skills"]
);

var_dump($user["skills"]);
var_dump($upperCaseSkills);
