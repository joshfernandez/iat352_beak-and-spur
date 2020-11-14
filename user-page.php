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

        <div class="userpage-profile-container">
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
        </div>

        <div class="userpage-button-container">
            <!-- <button>Edit Account</button>
            <button class="margin-top-lv4">+Upload New Font</button> -->
        </div>

        <div class="userpage-font-block-container">
            <button>Liked</button>
            <button>Uploaded Fonts</button>
            <button>Forked Fonts</button>
        </div>

        <div class="filter-container">

            <article class="filter-font-block">
                <div class="filter-font-bookmark">
                    <p></p>
                    <div class="filter-font-bookmark-row">
                        <form>
                            <input type="checkbox" id="filter-favorites" name="filter-favorites"></input>
                        </form>
                        <img src="../assets/img/star-filled.png" alt="star">
                    </div>
                </div>

                <div class="filter-font-block-text">
                    <h6 class="h7">4 STYLES</h6>
                    <h1 style="font-family: LeagueGothic;">League Gothic</h1>
                    <h6 class="h7">Designed by <span> Tyler Finck </span></h6>
                </div>

                <div class="filter-font-tags-container">

                    <div class="filter-font-tags">
                        <img src="../assets/img/tag-lines.png" alt="no tag lines">
                        <h6>Serif</h6>
                    </div>

                    <div class="filter-font-tags">
                        <img src="../assets/img/tag-lines.png" alt="no tag lines">
                        <h6>Glyph Serif</h6>
                    </div>
                </div>

            </article>


        </div>

    </main>

    <!-- <img src="assets/assets/img/x.png" alt="no"> -->

</body>

</html>