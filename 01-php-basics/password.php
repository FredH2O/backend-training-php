<?php

$password = "1234";
$wrongPassword = "asd1234";

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

echo $hashedPassword;
?>

<p>
    <?php
    if (password_verify($wrongPassword, $hashedPassword)) {
        echo "Password is correct";
    } else {
        echo "Wrong password entered. Reported for scammer!!";
    }
    ?>
</p>