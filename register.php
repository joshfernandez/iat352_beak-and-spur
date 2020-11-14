<?php require_once('php-backend/initialize.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registration page</title>

    <link rel="stylesheet" href="css/main.css">

</head>

<body class="register-page">

    <?php
    include "php-backend/set-header.php"
    ?>

    <main>

        <h1>Register for Beak and Spur</h1>

        <form action="register-complete.php" method="post">

            <p>Username
            </p>
            <input type="text" name="username" size="20" maxlength="30" />

            <p>Email address
            </p>
            <input type="text" name="email-address" size="50" maxlength="30" />

            <p>Password
            </p>
            <input type="password" name="password" size="20" maxlength="20" />

            <input type="submit" name="register" value="Register" />

        </form>

    </main>

    <?php

    include "php-backend/std-footer.php"

    ?>
    
</body>

</html>