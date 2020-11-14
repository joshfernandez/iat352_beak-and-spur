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
        ?>

        <form action="update-profile-complete.php" method="post" enctype="multipart/form-data">

            <p>Display name
                <input type="text" name="display-name" size="30" maxlength="30" value=<?php echo $logged_user_display_name; ?> />
            </p>

            <!-- Source: https://www.w3schools.com/php/php_file_upload.asp -->
            <!-- <p>Profile image
                <input type="file" name="profile-image" />
            </p> -->
            <!-- for PA3 -->

            <p>A short description of you
                <textarea name="member-description" cols="100" rows="4"><?php echo (!empty($logged_user_mem_desc) ? $logged_user_mem_desc : "How would you describe yourself?"); ?></textarea>
            </p>

            <p>Username
                <input type="text" name="username" size="20" maxlength="30" value=<?php echo $logged_user_username; ?> />
            </p>

            <p>Email address
                <input type="text" name="email-address" size="50" maxlength="30" value=<?php echo $logged_user_email; ?> />
            </p>

            <p>Password
                <input type="password" name="password" size="20" maxlength="20" />
            </p>

            <input type="submit" name="update-profile" value="Update your profile" />

        </form>

    </div>

</body>

</html>
