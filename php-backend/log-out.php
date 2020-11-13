<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Redirects page to visitor view -->
    <meta http-equiv="refresh" content="3;url=explore.php" />


    <title>Logging Out</title>

    <link rel="stylesheet" href="css/main.css">
</head>

<body class="logging-out-page">


<?php
if (isset($_SESSION["logged_in"])) {
    unset($_SESSION["logged_in"]);
}
session_destroy();

?>
    <main>

        <h1> Logging Out</h1>

    </main>
</body>

</html>