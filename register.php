<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Registration page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>

    <h1>Register for Beak and Spur</h1>

    <form action="register-complete.php" method="post">

      <p>Username:
        <input type="text" name="username" size="50" maxlength="30" />
      </p>

      <p>Email address:
        <input type="text" name="email-address" size="50" maxlength="30" />
      </p>

      <p>Password:
        <input type="password" name="password" size="20" maxlength="20" />
      </p>

      <input type="submit" name="register" value="Register" />

    </form>

  </body>

</html>
