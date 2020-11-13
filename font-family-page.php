<!DOCTYPE html>
<html lang="en">

<head>
    <title>Font-Family Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css sheet -->
    <link rel="stylesheet" href="css/main.css">

    <!-- jquery from google -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body class="font-family-page">

    <?php
    include "php-backend/set-header.php";
    // 0 - Import helper methods and procedures
    include "php-backend/helpers/form-analysis-methods.php";

    // load font-family page helper
    // include "php-backend/font-family-page-query.php";
    
    ?>

    <div class="container">
        <div id="title-container">
            <h6 class="margin-bottom-lv2">December 14th, 2018</h6>
            <div class="font-family-button-container">
                <h3 class="margin-bottom-lv1">
                    IBM Plex Sans

                </h3>
                <div>
                    <button class="font-family-download-button">DOWNLOAD &rarr;</button>
                </div>
            </div>
        </div>


        <div id="main-container">
            <div class="tab margin-top-lv3">
            </div>

            <div class="font">
                <form class="font" action="">
                    <input class="ibm-font" type="text" name="text" placeholder="IBM Plex Sans">
                </form>
            </div>

            <div class="sizing-attributes">
                <div class="font-family-slider-container">
                    <div class="font-family-slidecontainer">
                        <label class="explore-slidecontainer-style">Font-Size</label>
                        <input type="range" min="1" max="100" value="50" id="myRange">
                    </div>
                    <div class="font-family-slidecontainer">
                        <label>Font-Weight</label>
                        <input type="range" min="1" max="100" value="50" id="myRange">
                    </div>

                    <button>Italicize</button>
                </div>
            </div>

            <div class="description margin-top-lv8">
                <div>
                    <h4 class="margin-bottom-lv2">General</h4>
                    <p class="margin-bottom-lv4">IBM Plex™ is an international typeface family designed by Mike Abbink,
                        IBM BX&D, in collaboration
                        with Bold Monday, an independent Dutch type foundry. Plex was designed to capture IBM’s spirit
                        and history, and to illustrate the unique relationship between mankind and machine—a principal
                        theme for IBM since the turn of the century. The result is a neutral, yet friendly Grotesque
                        style typeface that includes a Sans, Sans Condensed, Mono, and Serif and has excellent
                        legibility in print, web and mobile interfaces. Plex’s three designs work well independently,
                        and even better together. Use the Sans as a contemporary compadre, the Serif for editorial
                        storytelling, or the Mono to show code snippets. The unexpectedly expressive nature of the
                        italics give you even more options for your designs.</p>
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
                            <h5>Dynamic Author</h5>
                            <h6>Dynamic Date</h6>
                        </div>
                    </div>
                </div>

                <div class="flex description-row margin-top-lv4">
                    <img src="assets/img/link.png" alt="no-designer">
                    <h6 class="margin-left-lv2">Dynamic Website</h6>
                </div>

                <div class="flex description-row margin-top-lv4">
                    <img src="assets/img/scale.png" alt="no-designer">
                    <h6 class="margin-left-lv2">Dynamic Licence</h6>
                </div>

            </div>

            <div class="tags-row margin-bottom-lv8">
                <h4>Tags</h4>
                <div class="border-top margin-top-lv1">

                    <div class="font-family-font-tags-container">
                        <div class="font-family-font-tags">
                            <img src="../assets/img/tag-lines.png" alt="no tag lines">
                            <h6>Serif</h6>
                        </div>

                        <div class="font-family-font-tags">
                            <img src="../assets/img/tag-lines.png" alt="no tag lines">
                            <h6>Slab Serif</h6>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>