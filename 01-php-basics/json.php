<?php

$data = [
    "name" => "Fred",
    "age" => 34,
    "skills" => ["HTML", "CSS", "JavaScript", "PHP"],
];
?>

<pre>
<?php echo json_encode($data, JSON_PRETTY_PRINT); ?>
</pre>