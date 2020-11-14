<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registration completed page</title>

    <link rel="stylesheet" href="css/main.css">
</head>

<body class="register-complete-page">

    <?php

    // 0 - Import helper methods and procedures.
    include "php-backend/helpers/form-analysis-methods.php";

    if (isFormSubmitted($_POST["register"])) {

        // 1A - Define and validate form responses for the registered member.
        $member_username = initializeField($_POST["username"]);
        $member_email = initializeField($_POST["email-address"]);
        $member_password = initializeField($_POST["password"]);

        // 1B - If any of the fields are empty, don't continue.
        if (!($member_username != "" && $member_email != "" && $member_password != "")) {
            die("The form has not yet been completed. Please fill it out completely.");
        }

        // 1C - If the username or email are invalid, don't continue.
        validateUsername($member_username);
        validateEmail($member_email);

        // 1D - Convert the password to a hash value.
        // This will be the password stored in the members table.
        // Source: https://www.php.net/manual/en/function.password-hash.php
        $member_pwhash = password_hash($member_password, PASSWORD_DEFAULT);

        // 2 - Write to the registered members file.
        $file = "registered-members.txt";

        // Source for using "a+" instead of 'w': https://stackoverflow.com/questions/103593/using-php-how-to-insert-text-without-overwriting-to-the-beginning-of-a-text-fil
        $file_write_handle = fopen($file, "a+");

        if ($file_write_handle) {
            fwrite($file_write_handle, $member_username . ", " . $member_email . ", " . $member_password . "\n");
            fclose($file_write_handle);
        } else {
            echo "Could not open file for writing.";
        }


        // 3 - Analyze form fields and add to the members table.
        include "php-backend/process-reg-form.php";




        include "php-backend/set-header.php"
    ?>

        <main>

            <div class="register-complete-container">
            <?php

            // 4 - Prompt the new member.
            echo "<h1>Thank you for registering for Beak and Spur!</h1>";
            echo "<p>Welcome to the new world of fonts, " . $member_username . "!</p>";
            echo "<p>Find news and updates in our monthly newsletter sent to your email " . $member_email . ".</p>";
            echo "<p>Hope you enjoy exploring Beak and Spur!</p>";
        }

            ?>

            <p>
                <a href="login.php">Login Now</a>
            </p>

            </div>

        </main>

<?php

include "php-backend/std-footer.php"

?>
</body>

</html>