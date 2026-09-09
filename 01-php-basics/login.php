<?php

session_start();

$username = "";
$password = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "Fred" && $password === "1234") {
        $_SESSION["name"] = $username;
        header("Location: protected.php");
        exit;
    } else {
        $error = "Wrong credentials";
    }
}



?>

<form method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <p><?php echo $error; ?></p>
    <button type="submit">Login</button>

</form>