<?php

$name = $_POST["name"] ?? "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($name === "") {
        echo "Name is REQUIRED DUMBASS!!!!!";
    } elseif (strlen($name) < 3) {
        $error = "Name must be longer than 3 characters!!";
    } else {
        echo "Hello, " . htmlspecialchars($name);
    }
}

?>

<form action="" method="POST">

    <input type="text" name="name">

    <?php if ($error !== ""): ?>
        <p> <?php echo $error; ?> </p>
    <?php endif; ?>

    <button type="submit">Submit</button>

</form>