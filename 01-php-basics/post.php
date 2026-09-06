<?php
session_start();

if (isset($_GET['name'])) {
    $urlName = $_GET['name'];
    echo "From URL: Hello, " . htmlspecialchars($urlName) . "!<br>";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST['name'])) {
        $_SESSION['name'] = $_POST['name'];
    }
}

if (isset($_SESSION['name'])) {
    echo "From SESSION: Welcome back, " . htmlspecialchars($_SESSION['name']) . "!<br>";
}
?>

<form method="POST">
    <input type="text" name="name" placeholder="POST Test">
    <button type="submit">Submit via POST</button>
</form>

<a href="?name=Alex">Try GET with ?name=Alex</a>