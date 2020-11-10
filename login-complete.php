<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login completed page</title>

    <link rel="stylesheet" href="css/styles-login-and-reg-pages.css">
</head>

<body>

    <div class="login-complete-page">

        <h1>Completing login for Beak and Spur...</h1>

        <?php

        if(isset($_POST["login"]) && !empty($_POST["login"])) {

          // 1A - Define and validate form responses for the login user.
          $login_username = (!empty($_POST["username"]) ? $_POST["username"] : "");
          $login_password = (!empty($_POST["password"]) ? $_POST["password"] : "");

          // 1B - If any of the fields are empty, don't continue.
          if(!($login_username != "" && $login_password != "")) {
            die("The form has not yet been completed. Please fill it out completely.");
          }


          // 2 - Analyze form fields and compare with the members table.
          include "php-backend/process-login-form.php";

          // 4 - Analyze the returned data.
          $num_result = mysqli_num_rows($result);

          if($num_result > 0) {

            // 4A - Prompt the new member.
            echo "<p>Welcome back, " . $login_username . "!</p>";
            echo "<p>Hope you enjoy exploring Beak and Spur!</p>";
            echo
            "<p>
                <a href=\"filter.php\">Return to the home page</a>
            </p>";

          }
          else {

            // 4B - Redirect an invalid visitor.
            echo "<p>You have entered either the incorrect username or password. Please try again.</p>";
            echo
            "<p>
                <a href=\"login.php\">Return to the login page</a>
            </p>";

          }

          // 5 - Release returned data.
          mysqli_free_result($result);

          // 6 - Close the database connection.
          include "php-backend/close-db-connection.php";

        }

        ?>



    </div>

</body>

</html>
