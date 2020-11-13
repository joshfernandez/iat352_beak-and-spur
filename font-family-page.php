<!DOCTYPE html>
<html lang="en">

<head>
    <title>Font-Family Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- shared elements css sheet -->
    <link href="css/shared_elements.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="css/normalize.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="css/font.css" media="screen" rel="stylesheet" type="text/css" />

    <!-- page specific sheet -->
    <link href="css/font-family-page.css" media="screen" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/filter.css">

    <!-- jquery from google -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

    <?php
    include('php-backend/helpers/set-header.php');
    ?>


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

    <div class="container">
        <div id="title-container">
            <h6 class="margin-bottom-lv2">December 14th, 2018</h6>
            <h3 class="margin-bottom-lv1">IBM Plex Sans</h3>
        </div>

        <div id="main-container">
            <div class="tab">
                <div>
                    <button>
                        <h5>General</h5>
                    </button>
                    <button>
                        <h5>Version History</h5>
                    </button>
                    <button>
                        <h5>Branches</h5>
                    </button>
                    <button>
                        <h5>Examples of Work</h5>
                    </button>
                </div>
                <h6>Version 3.1</h6>
            </div>

            <div class="font">
                <form class="font" action="">
                    <input class="ibm-font" type="text" name="text" placeholder="IBM Plex Sans">
                </form>
            </div>

            <div class="sizing-attributes">
                <input type="range" min="1" max="100" value="50">
                <input type="range" min="1" max="100" value="50">
            </div>

            <div class="description margin-top-lv8">
                <div>
                    <h4 class="margin-bottom-lv2">General</h4>
                    <p>IBM Plex™ is an international typeface family designed by Mike Abbink, IBM BX&D, in collaboration
                        with Bold Monday, an independent Dutch type foundry. Plex was designed to capture IBM’s spirit
                        and history, and to illustrate the unique relationship between mankind and machine—a principal
                        theme for IBM since the turn of the century. The result is a neutral, yet friendly Grotesque
                        style typeface that includes a Sans, Sans Condensed, Mono, and Serif and has excellent
                        legibility in print, web and mobile interfaces. Plex’s three designs work well independently,
                        and even better together. Use the Sans as a contemporary compadre, the Serif for editorial
                        storytelling, or the Mono to show code snippets. The unexpectedly expressive nature of the
                        italics give you even more options for your designs.</p>
                </div>
                <div>
                    <h4 class="margin-bottom-lv2">Usage</h4>
                    <p>The IBM Plex typeface is an open-source project and available for download and use following the
                        Open Font License (OFL). The IBM Plex family comes in Sans, Serif, Mono and Sans Condensed, all
                        with roman and true italics. The fonts have been designed to work well in user interface (UI)
                        environments, as well as other mediums. This project provides all source files and file formats
                        to support most typographical situations. Currently, IBM Plex Sans supports Extended Latin,
                        Arabic, Cyrillic, Devanagari, Greek, Hebrew, Korean and Thai. Japanese and Chinese will follow
                        in 2021 and 2022.</p>
                </div>
                <div>

                </div>
            </div>
        </div>

        <div id="attributes-container">
            <div class="designers-row margin-bottom-lv8">
                <h4>Designers</h4>

                <div class="border-top description-row">
                    <div class="margin-top-lv4 flex description-row ">
                        <img class="contributor-img-size" src="assets/img/designer_img.png" alt="no-designer">
                        <div class="margin-left-lv2">
                            <h5>Mike Abbink, et al</h5>
                            <h6>April 13th, 2020</h6>
                        </div>
                    </div>
                </div>

                <div class="flex description-row margin-top-lv4">
                    <img src="assets/img/link.png" alt="no-designer">
                    <h6 class="margin-left-lv2">https://www.ibm.com/plex/</h6>
                </div>

                <div class="flex description-row margin-top-lv4">
                    <img src="assets/img/scale.png" alt="no-designer">
                    <h6 class="margin-left-lv2">OFL-1.1 Licence</h6>
                </div>

            </div>

            <div class="tags-row margin-bottom-lv8">
                <h4>Tags</h4>
                <div class="border-top margin-top-lv1">
                    <div class="margin-top-lv2">
                        <button class="tag-styling">
                            Sans-Serif
                        </button>
                        <button class="tag-styling">
                            IBM
                        </button>
                        <button class="tag-styling">
                            Grotesque
                        </button>
                        <button class="tag-styling">
                            Bold Monday
                        </button>
                    </div>

                </div>
            </div>

            <div class="contributors-row">
                <h4>Contributors</h4>
                <div class="border-top margin-top-lv1">
                    <div class="margin-top-lv2">
                        <img class="contributor-img-size" src="assets/img/designer_img.png" alt="no-designer">
                        <img class="contributor-img-size" src="assets/img/designer_img.png" alt="no-designer">
                        <img class="contributor-img-size" src="assets/img/designer_img.png" alt="no-designer">
                    </div>
                </div>
            </div>

            <div>
                <button>Download</button>
            </div>
        </div>

    </div>


</body>

</html>