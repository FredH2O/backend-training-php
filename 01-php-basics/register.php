<?php

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($username === "" || $password === "") {
        $error = "Please fill username and password";
    } elseif (strlen($username) < 3) {
        $error = "Username must be atleast 3 character long.";
    } elseif (strlen($password) < 6) {
        $error = "Password must be at least 6 characters long.";
    } elseif (strpos($password, "@") === false) {
        $error = "Password must contain an '@' symbol. ";
    } elseif (preg_match_all("/[0-9]/", $password) < 4) {
        $error = "Password must contain at least 4 number.";
    } else {
        echo "All good here.";
    }
}

?>

<form method="POST">
    <p><?php echo $error; ?></p>
    <input type="text" name="username" placeholder="Username e.g. Flyingunicorn">
    <br>
    <input type="password" name="password" placeholder="Password e.g. Rat1234">
    <br>
    <button type="submit">Register</button>
</form>