<?php

$name = $_POST["name"] ?? "";
$email = $_POST["email"] ?? "";

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if ($name === "") {

        echo "Name is required.";
    } elseif (strlen($name) < 3) {

        $error = "Name must be atleast 3 characters.";
    } elseif ($email === "") {

        $error = "Email must not be empty";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        echo "Please enter a valid email address.";
    } else {

        echo "Hello, " . htmlspecialchars($name) . "<br>";
        echo "Your email address is " . htmlspecialchars($email);
    }
}

?>

<form action="" method="POST">

    <input type="text" name="name" placeholder="Name">
    <br>
    <br>
    <input type="text" name="email" placeholder="Email">

    <?php if ($error !== ""): ?>
        <p> <?php echo $error; ?> </p>
    <?php endif; ?>

    <button type="submit">Submit</button>

</form>