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
    // include PRIVATE_PATH."/helpers/set-header.php";
    // echo PRIVATE_PATH. "<p> provate</p><br>";
    // echo PROJECT_PATH."<p> project</p><br>";
    // echo PUBLIC_PATH. "<p> public</p><br>";   
    
    ?>



    <main>



        <h1>Register for Beak and Spur</h1>

        <form action="register-complete.php" method="post">

            <p>Username
                <input type="text" name="username" size="20" maxlength="30" />
            </p>

            <p>Email address
                <input type="text" name="email-address" size="50" maxlength="30" />
            </p>

            <p>Password
                <input type="password" name="password" size="20" maxlength="20" />
            </p>

            <input type="submit" name="register" value="Register" />

        </form>

    </main>
</body>

</html>