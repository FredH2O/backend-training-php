<?php

$name2 = ""; // initial value

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $_POST["name"];

    echo "Hello, " . $name . "!<br>";
    echo "Hello, " . $_POST['name'] . "!<br>";
}

if ($_SERVER["REQUEST_METHOD"] === "GET") {



    if (isset($_GET["name"])) {
        $name2 = $_GET["name"];

        echo "This is the data name " . $_GET["name"];
    }
}

?>

<form action="" method="POST">
    <input type="text" name="name">

    <button type="submit">Submit</button>

</form>

<form action="" method="GET">
    <input type="text" name="name">

    <p><?php echo $name2 ?></p>

    <button type="submit">Submit GET</button>

</form>