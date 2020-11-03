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

        if(isset($_POST["register"])) {

          // 1 - Define form responses.
          $member_username = $_POST["username"];
          $member_email = $_POST["email-address"];
          $member_password = $_POST["password"];


          // 2 - Write to the registered members file.
          $file = "registered-members.txt";

          // Source for using "a+" instead of 'w': https://stackoverflow.com/questions/103593/using-php-how-to-insert-text-without-overwriting-to-the-beginning-of-a-text-fil
          $file_write_handle = fopen($file, "a+");

          if($file_write_handle) {
            fwrite($file_write_handle, $member_username . ", " . $member_email . ", " . $member_password . "\n");
            fclose($file_write_handle);
          }
          else {
            echo "Could not open file for writing.";
          }


          // 3 - Prompt the new member.
          echo "<p>Welcome to the new world of fonts, " . $member_username . "!</p>";
          echo "<p>Find news and updates in our monthly newsletter sent to your email " . $member_email . ".</p>";
          echo "<p>Hope you enjoy exploring Beak and Spur!</p>";

        }

      ?>

      <p>
        <a href="index.php">Return to the home page</a>
      </p>

    </div>

  </body>

</html>
