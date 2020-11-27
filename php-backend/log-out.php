<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logging Out</title>
    <link rel="stylesheet" href="css/main.css">

    <!-- Redirects page to visitor view -->
    <?php
    $upOne = '../'; 
    echo '<meta http-equiv="refresh" content="1;url=' . $upOne . '\index.php" />'
    ?>
</head>

<body class="logging-out-page">
    <?php
    // Start a session for the current user
    session_start();

    // if the logged_user 
    if (isset($_SESSION["logged_user"])) {
        unset($_SESSION["logged_user"]);
    }
    // Destroy current session that user is on
    session_destroy();
    ?>
    <main>
        <?php
        $upOne = __DIR__;
        echo "<h1> Logging Out $upOne </h1>"
        ?>

    </main>
</body>

</html>