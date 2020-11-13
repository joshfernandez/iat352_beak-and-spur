<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registration completed page</title>

    <link rel="stylesheet" href="css/styles-login-and-reg-pages.css">
</head>

<body>

    <div class="register-complete-page">

        <h1>Thank you for registering for Beak and Spur!</h1>

        <?php

        // 0 - Import helper methods and procedures.
        include "php-backend/helpers/form-analysis-methods.php";

        if(isFormSubmitted($_POST["register"])) {

          // 1A - Define and validate form responses for the registered member.
          $member_username = initializeField($_POST["username"]);
          $member_email = initializeField($_POST["email-address"]);
          $member_password = initializeField($_POST["password"]);

          // 1B - If any of the fields are empty, don't continue.
          if(!($member_username != "" && $member_email != "" && $member_password != "")) {
            die("The form has not yet been completed. Please fill it out completely.");
          }

          // 1C - Convert the password to a hash value.
          // This will be the password stored in the members table.
          // Source: https://www.php.net/manual/en/function.password-hash.php
          $member_pwhash = password_hash($member_password, PASSWORD_DEFAULT);


          // 2 to 4 - Analyze form fields and add to the members table.
          include "php-backend/process-reg-form.php";


          // 5 - Prompt the new member.
          echo "<p>Welcome to the new world of fonts, " . $member_username . "!</p>";
          echo "<p>Find news and updates in our monthly newsletter sent to your email " . $member_email . ".</p>";
          echo "<p>Hope you enjoy exploring Beak and Spur!</p>";

        }

        ?>

        <p>
            <a href="filter.php">Return to the home page</a>
        </p>

    </div>

</body>

</html>
