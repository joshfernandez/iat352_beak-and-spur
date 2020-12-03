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
    // include "php-backend/prepare-preferences-form.php";


    // include "php-backend/set-header.php";
    ?>

    <main class="">

        <h1>Personalize your fonts and font searches</h1>


        <h2>Favourite font types</h2>

        <p>Choose your favourite font types from the list below.</p>

        <form action="preferences-complete.php" method="post">

          <p>
            <input type="checkbox" name="order-attributes[]" value="serif"/> Serif<br />
            <input type="checkbox" name="order-attributes[]" value="sans serif"/> Sans-serif<br />
            <input type="checkbox" name="order-attributes[]" value="humanist"/> Humanist<br />
            <input type="checkbox" name="order-attributes[]" value="geometric"> Geometric<br />
            <input type="checkbox" name="order-attributes[]" value="hand drawn"> Handdrawn<br />
          </p>

          <input type="submit" name="update-preferences" value="Update your preferences" />

        </form>

    </main>
    <?php

    include "php-backend/std-footer.php"

    ?>

</body>


</html>
