<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registration page</title>

    <link rel="stylesheet" href="css/styles-login-and-reg-pages.css">
  </head>

  <body>

    <div class="register-page">

      <h1>Register for Beak and Spur</h1>

      <form action="register-complete.php" method="post">

        <p>Username
          <input type="text" name="username" size="50" maxlength="30" />
        </p>

        <p>Email address
          <input type="text" name="email-address" size="50" maxlength="30" />
        </p>

        <p>Password
          <input type="password" name="password" size="20" maxlength="20" />
        </p>

        <input type="submit" name="register" value="Register" />

      </form>

    </div>

  </body>

</html>
