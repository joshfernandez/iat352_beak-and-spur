<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login page</title>

    <link rel="stylesheet" href="css/styles-login-and-reg-pages.css">
    <link rel="stylesheet" href="css/filter.css">
    <link href="css/shared_elements.css" media="screen" rel="stylesheet" type="text/css" />


</head>

<body>
    <nav>
        <a href="filter.php">
            <img class="logo-size" src="assets/img/logo.png" alt="logo!">
        </a>
        <input type="text" placeholder="Search..">

        <div class="dropdown">
            <img class="person-icon" src="https://img.icons8.com/material-sharp/64/000000/person-male.png" />
            <button class="dropbtn">˅</button>
            <h4></h4>
            <div class="dropdown-content">
                <a href="#">Login</a>
                <a href="#">Preferences</a>
                <a href="#">Your Fonts</a>
            </div>
        </div>
    </nav>

    <div class="login-page">

        <h1>Login to Beak and Spur</h1>

        <!-- <form action="login-successful.php" method="post"> -->
        <form>

            <p>Username
                <input type="text" name="username" size="50" maxlength="30" />
            </p>

            <p>Password
                <input type="password" name="password" size="20" maxlength="20" />
            </p>

            <h4>No Account? <a href="register.php">Sign Up!</a></h4>

            <a href="filter.php">
                <input href="filter.php" type="submit" name="login" value="Login" />
            </a>

        </form>
    </div>

</body>

</html>