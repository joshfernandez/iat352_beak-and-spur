<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Preferences completed page</title>

    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <div class="preferences-complete-page">

        <h1>Updating your preferences...</h1>

        <?php

        // 0A - Import helper methods and procedures and start a session.
        include "php-backend/helpers/form-analysis-methods.php";

        session_start();
        $logged_user = (!empty($_SESSION["logged_user"]) ? initializeField($_SESSION["logged_user"]) : "");

        if(!(isset($logged_user) &&
          isFormSubmitted($_POST["update-preferences"]))) {
          echo "Your profile cannot be updated. Either you did not submit the form or you are not logged in. Please try again.";
        }
        else {

          // 1A - Define and validate form responses for the registered member.
          $fav_font_types = (!empty($_POST["fav-font-types"]) ? $_POST["fav-font-types"] : []);  // Array of favourite font types

          // 2 to 4 - Analyze form fields and add to the members table.
          include "php-backend/process-preferences.php";

          // 5 - Prompt the new member.
          echo "<p>Your preferences has been updated successfully, " . $logged_user . "!</p>";
          echo "<p>Hope you continue enjoying Beak and Spur!</p>";

        }

        ?>

        <p>
            <a href="index.php">Return to the home page</a>
        </p>

    </div>

</body>

</html>
