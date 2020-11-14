<!DOCTYPE html>
<html lang="en">

<head>
    <title>Font-Family Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css sheet -->
    <link rel="stylesheet" href="css/main.css">

    <?php

    // load font-family page helper
    include "php-backend/font-family-page-query.php";

    // header varies between member and visitor
    include "php-backend/set-header.php";

    // 0 - Import helper methods and procedures
    include "php-backend/helpers/form-analysis-methods.php";
    ?>

    <?php
    while ($font_data = mysqli_fetch_assoc($fontfile)) {
        $font_styling = $font_data['font_file'];

        // echo "<style> 
        //     @font-face{
        //         font-family: 'loadedFont'; 
        //         src: url(data:application/x-font-otf;charset=utf-8;base64,$font_styling) format('otf');
        //         font-weight: normal;
        //         font-style: normal;
        //     }
        // </style>";
    } ?>

    <!-- jquery from google -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body class="font-family-page">
    <div class="container">

        <div id="title-container">
            <h6 class="margin-bottom-lv2">December 14th, 2018</h6>
            <div class="font-family-button-container">
                <h3 class="margin-bottom-lv1">
                    <?php
                    //retrieve font family name from database
                    while ($family_name = mysqli_fetch_assoc($fontname)) {
                        $fontName = $family_name['family_name'];
                        echo $fontName;
                    }
                    ?>
                </h3>
                <div>
                    <!-- add downloading font functionality for visitors for PA3 -->
                    <button class="font-family-download-button">DOWNLOAD &rarr;</button>
                </div>
            </div>
        </div>


        <div id="main-container">
            <div class="tab margin-top-lv3">
            </div>

            <div class="font">
                <form class="font">
                    <!-- change placeholder text to display the font-name -->
                    <input class='ibm-font' type='text' name='text' placeholder='<?php
                                                                                    echo $fontName;
                                                                                    ?>'>


                    <!-- --- where the font styling should go --- -->
                    <!-- <p style="font-family:loadedFont">change this to violet sans before doing anything else</p> -->


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

                    <!-- add dynamic styling for PA3 -->
                    <button>Italicize</button>
                </div>
            </div>
        </div>

        <div id="attributes-container">
            <div class="designers-row margin-bottom-lv8">
                <h4 class="margin-bottom-lv1">Font Attributes</h4>

                <div class="border-top description-row">
                    <div class="margin-top-lv4 flex description-row ">
                        <?php
                        //retrieve image from the database & display as the designer image
                        while ($imagerow = mysqli_fetch_assoc($designerimg)) {
                            $designerShowImage = $imagerow["profile_img"];
                            echo '<img src="data:image/jpeg;base64,' . base64_encode($designerShowImage) . '" alt="no" class="contributor-img-size"/>';
                        }
                        ?>
                        <div class="margin-left-lv2">
                            <h4>
                                <?php
                                //retrieve designer name from database
                                while ($designer_name = mysqli_fetch_assoc($fontdesigner)) {
                                    $designerName = $designer_name['designer'];
                                    echo $designerName;
                                }
                                ?>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="flex description-row margin-top-lv4">
                    <img style="width: 1.7em" src="assets/img/lang-icon.png" alt="link">
                    <h6 class="margin-left-lv2">
                        <?php
                        // retrieve language support from database
                        while ($font_lang = mysqli_fetch_assoc($fontlanguages)) {
                            $languages = $font_lang['languages'];
                            echo $languages;
                        }
                        ?>
                    </h6>
                </div>

                <div class="flex description-row margin-top-lv4">
                    <img src="assets/img/scale.png" alt="no-designer">
                    <h6 class="margin-left-lv2">
                        <?php
                        // retrieve license type from database
                        while ($licence_name = mysqli_fetch_assoc($fontlicence)) {
                            $licence = $licence_name['licence'];
                            echo $licence;
                        }
                        ?>
                    </h6>
                </div>
            </div>

            <div class="tags-row margin-bottom-lv8">
                <h4>Tags</h4>
                <div class="border-top margin-top-lv1">
                    <div class="font-family-font-tags-container">
                        <?php
                        // Retrieve Font Type
                        while ($font_type = mysqli_fetch_assoc($fonttype)) {
                            $type = $font_type['font_type'];

                            // Assign Associative Array into a variable
                            $typeArray = (explode(",", $type));

                            // Assign Associative Array into a variable
                            $typeArray = (explode(",", $type));

                            // Get Associate Array Size for For Loop
                            $typeArraySize = sizeof($typeArray);

                            // check how large the array is.
                            // echo "$typeArraySize";

                            // display font-tags dynamically with FOR LOOP
                            for ($x = 0; $x < $typeArraySize; $x++) {
                                $typePrint = $typeArray[$x];
                                echo "<div class='font-family-font-tags'>
                                        <img src='../assets/img/tag-lines.png' alt='no tag lines'>
                                        <h6>$typePrint</h6>
                                    </div>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

    include "php-backend/std-footer.php"

    ?>
</body>

</html>