<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Page</title>
    <!-- details regarding the file -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Explore fonts on Beak & Spur: a community for exploring, sharing and remixing open source typography">
    <meta name="keywords" content="HTML,CSS,JavaScript,PHP">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="p:domain_verify" content="08e8999c41c6d49126256ccafec71782" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- loading fonts into the page -->
    <link rel="stylesheet" href="css/main.css">

</head>

<body>
    <?php
    include "php-backend/set-header.php"
    ?>

    <main class="margin-top-lv8">

        <!-- <div class="userpage-profile-container">
            <div>
                <img src="../assets/img/designer-img.png" alt="designer-img">
            </div>
            <div class="userpage-profile-image-contents">
                <h3>Dynamically Generated Username</h3>
                <h6 class="margin-top-lv1">Dynamically generated date</h6>
            </div>
        </div>

        <div class="userpage-profile-description">
            <p> Dynamically generated content sapien arcu, ac tellus id sed sit dolor purus ac dui magnis nunc purus
                enim quam et viverra lobortis eget nam aliquam vulputate et feugiat arcu bibendum at mauris massa
                pellentesque volutpat netus
                metus proin malesuada viverra quis eu pulvinar bibendum non est integer proin feugiat euismod cras
                nisl, arcu, fa.</p>
        </div> -->

        <div class="userpage-button-container">
            <!-- <button>Edit Account</button>
            <button class="margin-top-lv4">+Upload New Font</button> -->
        </div>

        <div class="userpage-font-block-container">
            <!-- <button>Uploaded Fonts</button> -->
        </div>


        <!-- Josh's personalization / preferences form -->
        <div class="userpage-preferences">
            <div>
                <h1>Personalize your fonts and font searches</h1>
                <p class="descriptor">Choose your favourite font types from the list below.</p>
            </div>

            <form action="preferences-complete.php" method="post">

                <p>
                    <?php include "php-backend/populate-font-type-checkboxes.php"; ?>
                </p>


                <input type="submit" name="update-preferences" value="Update your preferences" />

            </form>
        </div>
    </main>
</body>

</html>