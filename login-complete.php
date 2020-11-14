<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Login completed page</title>

    <link rel="stylesheet" href="css/main.css">

</head>

<body class="login-complete-page">

    <main>
        <?php

        // 0 - Import helper methods and procedures.
        include "php-backend/helpers/form-analysis-methods.php";

        if (isFormSubmitted($_POST["login"])) {

            // 1A - Define and validate form responses for the login user.
            $login_username = initializeField($_POST["username"]);
            $login_password = initializeField($_POST["password"]);

            // 1B - If any of the fields are empty, don't continue.
            if (!($login_username != "" && $login_password != "")) {
                die("The form has not yet been completed. Please fill it out completely.");
            }


            // 2 - Analyze form fields and compare with the members table.
            include "php-backend/process-login-form.php";

            // 4 - Analyze the returned data.
            $num_result = mysqli_num_rows($result);
        
            if ($num_result > 0) {

                // Compare the hash value and password.
                // Source: Helmine's basicAuth2db-2.php
                $result_row = mysqli_fetch_row($result);
                $actual_hash = $result_row[0];

                // Source: https://www.php.net/manual/en/function.password-verify.php
                if (password_verify($login_password, $actual_hash)) {

                    // 4A - Prompt the new member.
                    echo "<div class='login-complete-container'>";
                    echo "<p>Welcome back, " . $login_username . "!</p>";
                    echo "<p>Hope you enjoy exploring Beak and Spur!</p>";
                    echo "<p> <a href=\"filter.php\">Return to the home page</a></p>";
                    echo "</div>";

                    $_SESSION['logged_user'] = $login_username;
                    // $testinglog = $_SESSION["logged_in"];
                    // echo "<br> <h1> $testinglog</h1>";

                } else {

                    // 4B - Redirect a user who entered the wrong password.
                    echo "<p>You have entered your password incorrectly. Please try again.</p>";
                    echo
                        "<p>
                  <a href=\"login.php\">Return to the login page</a>
              </p>";
                }
            } else {

                // 4C - Redirect an invalid visitor.
                echo "<p>You have entered either the incorrect username or password. Please try again.</p>";
                echo
                    "<p>
                <a href=\"login.php\">Return to the login page</a>
            </p>";
            }

            // 5 - Release returned data.
            mysqli_free_result($result);

            // 6 - Close the database connection.
            closeDBConnection($db_connection);
        }

        ?>




    </main>
</body>

</html>