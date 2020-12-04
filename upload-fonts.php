<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Upload fonts</title>

    <link rel="stylesheet" href="css/main.css">


</head>

<body class="upload-font-page">

    <?php
    include "php-backend/upload-form-helper.php";
    include "php-backend/upload-form-populator.php";

    include 'php-backend/member-header.php';

    // include "php-backend/set-header.php";  
    ?>

    <main class="">

        <h1>Upload a new Font Family</h1>


        <form action="font-family-page.php" method="post" enctype="multipart/form-data">

            <p>Font-family name
                <input type="text" name="display-name" size="30" maxlength="30" value="" />
            </p>

            <!-- Source: https://www.w3schools.com/php/php_file_upload.asp -->
            <!-- <p>Profile image
                <input type="file" name="profile-image" />
            </p> -->
            <!-- for PA3 -->

            <p>A short description of the typeface and its characteristics
                <textarea class="update-description" name="member-description" cols="100" rows="4"><?php echo (!empty($logged_user_mem_desc) ? $logged_user_mem_desc : "This typeface is inspired by..."); ?></textarea>
            </p>

            <p>Designer
                <input type="text" name="designer" size="20" maxlength="30" value="" />
            </p>

            <p>Languages</p>
            <div class="checkbox-group-cont">

                <?php
                $filter_arr = "font_lang_filter";
                inputLooper($font_lang_result, $filter_arr, $checkboxes, $setCleaner);
                ?>
            </div>

            <p>Font Type</p>
            <div class="checkbox-group-cont">

                <?php
                $filter_arr = "font_type_filter";

                inputLooper($font_types_result, $filter_arr, $checkboxes, $setCleaner);
                ?>
            </div>

            <p>X Height</p>
            <div class="checkbox-group-cont">

                <?php
                $filter_arr = "xheight_filter";
                inputLooper($font_xheights_result, $filter_arr, $checkboxes, $setCleaner);
                ?>
            </div>
            <p>Ascendor</p>
            <div class="checkbox-group-cont">

                <?php
                $filter_arr = "ascender_filter";
                inputLooper($font_asc_result, $filter_arr, $checkboxes, $setCleaner);
                ?>
            </div>
            <p>Descender</p>
            <div class="checkbox-group-cont">

                <?php
                $filter_arr = "descender_filter";
                inputLooper($desc_result, $filter_arr, $checkboxes, $setCleaner);
                ?>
            </div>


            <div class="i_f" id="newlink">   
                <!-- <hr>

                <p>Weight</p>
                <div class="checkbox-group-cont">

                    <?php
                    // $filter_arr = "weight_filter[]";
                    // inputLooper($weight_result, $filter_arr, $radiobuttons, $setCleaner);
                    ?>
                </div>
                <p>Italics</p>
                <div class="checkbox-group-cont">

                    <?php
                    // $filter_arr = "italics_filter[]";
                    // inputLooper($italics_result, $filter_arr, $radiobuttons, $setCleaner);
                    ?>
                </div>
                <input type="file" name="fileToUpload" id="fileToUpload"> -->

            </div>
            <div id="newlinktpl" style="display:none">
    
                <hr>

                <p>Weight</p>
                <div class="checkbox-group-cont">

                    <?php
                    $filter_arr = "weight_filter[]";
                    inputLooper($weight_result, $filter_arr, $radiobuttons, $setCleaner);
                    ?>
                </div>
                <p>Italics</p>
                <div class="checkbox-group-cont">

                    <?php
                    $filter_arr = "italics_filter[]";
                    inputLooper($italics_result, $filter_arr, $radiobuttons, $setCleaner);
                    ?>
                </div>
                <input type="file" name="fileToUpload" id="fileToUpload">
                <!-- <button id="add-more">Add more fonts</button> -->
            </div>


            <p id="addnew">
                <a href="javascript:new_link()">Add New </a>
            </p>
            <input type="submit" name="update-profile" value="Update your profile" />
        </form>

    </main>
    <?php

    include "php-backend/std-footer.php"

    ?>
 <script src="js/main.js"> </script>
</body>


</html>