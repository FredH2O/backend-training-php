<?php
require __DIR__ . "/users.php";
session_start();

$username = "";
$password = "";
$error = "";
$loginSuccessful = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    foreach ($users as $user) {
        if ($username === $user["username"] && password_verify($password, $user["password"])) {

            $loginSuccessful = true;
            $_SESSION["name"] = $username;

            header("Location: protected.php");
            exit;
        }
    }

    if ($username === "" || $password === "") {
        $error = "Please fill the fields provided or else imma smack ya";
    } elseif (!$loginSuccessful) {
        $error = "Login failed. Try again later.";
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <p><?php echo $error; ?></p>
    <button type="submit">Login</button>
</form>