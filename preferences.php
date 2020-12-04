<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Preferences page</title>

    <link rel="stylesheet" href="css/main.css">


</head>

<body class="preferences-page">

    <?php
    // include "php-backend/set-header.php";
    ?>

    <main class="">

        <h1>Personalize your fonts and font searches</h1>


        <h2>Favourite font types</h2>

        <p>Choose your favourite font types from the list below.</p>

        <form action="preferences-complete.php" method="post">

          <p>
            <?php include "php-backend/populate-font-type-checkboxes.php"; ?>
          </p>

          <input type="submit" name="update-preferences" value="Update your preferences" />

        </form>

    </main>
    <?php

    include "php-backend/std-footer.php"

    ?>

</body>


</html>
