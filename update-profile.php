<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Update profile page</title>

    <link rel="stylesheet" href="css/styles-login-and-reg-pages.css">

</head>

<body>

    <div class="update-profile-page">

        <h1>Update your profile in Beak and Spur</h1>

        <?php
        include "php-backend/prepare-update-form.php";
        if(!empty($result)) {

          while($row = mysqli_fetch_assoc($result)) {
            foreach($row as $value) {
              echo stripslashes($value) . "<br />";
            }
          }

        }
        else {
          echo "";
        }
        ?>

        <form action="update-profile-complete.php" method="post" enctype="multipart/form-data">

            <p>Display name
                <input type="text" name="display-name" size="20" maxlength="30" />
            </p>

            <!-- Source: https://www.w3schools.com/php/php_file_upload.asp -->
            <p>Profile image
                <input type="file" name="profile-image" />
            </p>

            <p>A short description of you
                <textarea name="member-description" cols="100" rows="4">How would you describe yourself?</textarea>
            </p>

            <p>Username
                <input type="text" name="username" size="20" maxlength="30" />
            </p>

            <p>Email address
                <input type="text" name="email-address" size="50" maxlength="30" />
            </p>

            <p>Password
                <input type="password" name="password" size="20" maxlength="20" />
            </p>

            <input type="submit" name="update-profile" value="Update your profile" />

        </form>

    </div>

    <?php
    // To close prepare-update-form.php

    if(isset($logged_user)) {
      // 5 - Release returned data.
      mysqli_free_result($result);

      // 6 - Close the database connection.
      mysqli_close($db_connection);
    }
    ?>

</body>

</html>
