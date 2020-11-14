<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Redirects page to visitor view -->
    <?php
    //  $upOne=dirname(__DIR__, 1); 
    $upOne = '../'; 
    echo '<meta http-equiv="refresh" content="3;url=' . $upOne . '\explore.php" />'
    ?>

    <title>Logging Out</title>

    <link rel="stylesheet" href="css/main.css">
</head>

<body class="logging-out-page">


    <?php
        session_start();
    if (isset($_SESSION["logged_user"])) {
        unset($_SESSION["logged_user"]);
    }
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