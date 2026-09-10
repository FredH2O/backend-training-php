<?php
require __DIR__ . "/users.php";
session_start();

$username = "";
$password = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    foreach ($users as $user) {
        if ($username === $user["username"] && password_verify($password, $user["password"])) {
            echo "User found";
        } else {
            echo "Wrong credential, try again tomorrow when you aint mad.";
        }
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <p><?php echo $error; ?></p>
    <button type="submit">Login</button>
</form>