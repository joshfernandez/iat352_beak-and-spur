<?php require_once('php-backend/initialize.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login page</title>


    <link rel="stylesheet" href="css/main.css">


</head>

<body class="login-page">

    <?php
    include "php-backend/set-header.php"
    ?>



    <main>

        <h1>Login to Beak and Spur</h1>

        <form action="login-complete.php" method="post">

            <p> Username
            </p>
            <input type="text" name="username" size="20" maxlength="30" />

            <p>Password
            </p>
                <input type="password" name="password" size="20" maxlength="20" />

            <h4>No Account? <a href="register.php">Sign Up!</a></h4>

            <input type="submit" name="login" value="Login" />
            <!-- <a href="filter.php">
                <input href="filter.php" type="submit" name="login" value="Login" />
            </a> -->

        </form>

    </main>

</body>

</html>