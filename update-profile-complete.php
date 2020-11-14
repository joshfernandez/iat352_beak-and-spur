<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Update profile completed page</title>

    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <div class="update-profile-complete-page">

        <h1>Updating your profile...</h1>

        <?php

        // 0A - Import helper methods and procedures and start a session.
        include "php-backend/helpers/form-analysis-methods.php";
        session_start();
        $logged_user = (!empty($_SESSION["logged_user"]) ? initializeField($_SESSION["logged_user"]) : "");

        if(!(isset($logged_user) &&
          isFormSubmitted($_POST["update-profile"]))) {
          echo "Your profile cannot be updated. Either you did not submit the form or you are not logged in. Please try again.";
        }
        else {

          // 1A - Define and validate form responses for the registered member.
          $updated_username = initializeField($_POST["username"]);
          $updated_email = initializeField($_POST["email-address"]);
          $updated_password = initializeField($_POST["password"]);
          $updated_mem_desc = initializeField($_POST["member-description"]);
          $updated_display_name = initializeField($_POST["display-name"]);
        //   $updated_profile_image = $_FILES["profile-image"];
        //   $updated_profile_image_name = $updated_profile_image["name"];

          // 1B - If any of the fields are empty, continue without updating.
          // if(!($member_username != "" && $member_email != "" && $member_password != "")) {
          //   die("The form has not yet been completed. Please fill it out completely.");
          // }

          // 1C - If any of the fields are invalid, don't continue.
          validateUsername($updated_username);
          validateEmail($updated_email);
          // validateMemberDescription($updated_mem_desc);
          // validateDisplayName($updated_display_name);
          // validateProfileImage($updated_profile_image);

          // 1D - Convert the password to a hash value.
          // This will be the password stored in the members table.
          // Source: https://www.php.net/manual/en/function.password-hash.php
          $updated_pwhash = password_hash($updated_password, PASSWORD_DEFAULT);


          // 2 to 4 - Analyze form fields and add to the members table.
          include "php-backend/process-update-form.php";


          // 5 - Prompt the new member.
          echo "<p>Your profile has been updated successfully, " . $updated_username . "!</p>";
          echo "<p>Hope you continue enjoying Beak and Spur!</p>";

        }

        ?>

        <p>
            <a href="index.php">Return to the home page</a>
        </p>

    </div>

</body>

</html>