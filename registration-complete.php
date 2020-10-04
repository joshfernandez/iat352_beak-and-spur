<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registration completed page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

    <h1>Thank you for registering for Beak and Spur!</h1>

    <?php

      if(isset($_POST["register"])) {

        echo "<p>Welcome to the new world of fonts, " . $_POST["name"] . "!</p>";
        echo "<p>Find news and updates in our monthly newsletter sent to your email " . $_POST["email-address"] . ".</p>";
        echo "<p>Hope you enjoy exploring Beak and Spur!</p>";

      }

    ?>

    <p>
      <a href="index.php">Return to the home page</a>
    </p>

  </body>
</html>
