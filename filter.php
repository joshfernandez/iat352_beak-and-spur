<!DOCTYPE html>
<html lang="en">

<head>
    <title>Filter</title>
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

<body class="filter">

    <?php
    include "php-backend/set-header.php";

    include "php-backend/filter-options.php";
    include "php-backend/filter-populator.php"

    ?>

    <main class="margin-top-lv8">
        <form class="filter-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <!-- SEARCH BAR -->
            <div class="filter-searchbar" autocomplete="off">
                <input type="text" id="searchbar_f" name="searchbar_f" placeholder="Find fonts by name, type, year"
                    onKeyUp="filter_suggestion()">
                <div id="suggestion"></div>
                <input type="submit" name="submit" value="Search For Type">
            </div>

            <!-- PRIMARY FILTER -->
            <div class="filter-primary">
                <h5 class="margin-bottom-lv1">Primary Filters</h5>
                <?php
                while ($font_types_arr = mysqli_fetch_assoc($font_types_result)) {
                    $string = "";
                    $string .= serialize($font_types_arr);
                    $string = substr($string, 35);
                    $string = rtrim($string, ')";}');
                    $ind = 0;
                    $font_types = explode(",", $string);
                    foreach ($font_types as $font_type) {
                        $ind += 1;
                        $font_type = trim($font_type, "'");

                        $check = "";
                        if (isset($_POST["x_height_filter"][$ind])) {
                            $check = 'checked="checked"';
                        }

                        echo '
            <span class="checkbox-holder">
            <input type="checkbox" ' . $check . '
            id="' . $font_type . '" 
            name="font_type_filter[' . $font_type . ']"             
            value="' . $font_type . '"
            >
            <label 
            for="' . $font_type . '"
            >
             ' . $font_type . '
             </label>
            </span>
             
             ';
                    }
                };

                ?>

            </div>

            <div class="filter-secondary">
                <h5 class="margin-bottom-lv1">Secondary Filters</h5>
                <?php
                while ($font_xheights_arr = mysqli_fetch_assoc($font_xheights_result)) {

                    $string = "";
                    $string .= serialize($font_xheights_arr);
                    $string = substr($string, 35);
                    $string = rtrim($string, ')";}');

                    $ind = 0;

                    $font_xheights = explode(",", $string);

                    foreach ($font_xheights as $font_xheight) {
                        $ind += 1;

                        // echo $ind;

                        $font_xheight = trim($font_xheight, "'");
                        $check = "";
                        if (isset($_POST["x_height_filter"][$ind])) {
                            $check = 'checked="checked"';
                        }

                        echo '
            <span class="checkbox-holder">
            <input 
            type="checkbox" 
           ' . $check . '
            id="' . $font_xheight . '" 
            name="x_height_filter[' . $font_xheight . ']"             
            value="' . $font_xheight . '"
            >
            <label 
            for="' . $font_xheight . '"
            >
             ' . $font_xheight .  ' 
             </label>
            </span> 
             
             ';
                    }
                };

                ?>
        </form>

        <div class="filter-container">

            <?php
            if (!empty($font_list)) {
                while ($row = mysqli_fetch_assoc($font_list)) {
                
                // link filter-font-block to the respective font-family page here
                echo '<a href=' . "#" . ' class="filter-font-block">';

                // code for personalization
                echo '
                <div class="filter-font-bookmark">
                    <p></p>
                    <div class="filter-font-bookmark-row">
                        <form>
                            <input type="checkbox" id="filter-favorites" name="filter-favorites"></input>
                        </form>
                        <img src="../assets/img/star-filled.png" alt="star">
                    </div>
                </div>';
                
                // display contents of code here
                echo '
                <div class="filter-font-block-text">
                    <h6 class="h7">4 STYLES</h6>
                    <h1 style="font-family: ;">
                    ' . $row['family_name'] . '
                    </h1>
                    <h6 class="h7">Designed by <span> 
                    ' . $row['display_name'] . '
                     </span></h6>
                </div>
                <div class="filter-font-tags-container">';

                    $tags_string = $row['font_type'];

                    // Assign Associative Array into a variable
                    $tags_arr = (explode(",", $tags_string));

                    // Get Associate Array Size for For Loop
                    $tag_array_size = sizeof($tags_arr);

                    // check how large the array is.
                    // echo "$typeArraySize";

                    // display font-tags dynamically with for loop
                    for ($x = 0; $x < $tag_array_size; $x++) {
                        $tag_txt = $tags_arr[$x];
                        echo '<div class="filter-font-tags">
                        <img src="../assets/img/tag-lines.png" alt="no tag lines">
                        <h6> ' . $tag_txt . ' </h6>
                    </div>';
                    }
                    echo'</div>';
                    // reroute each of the font-family pages to a font-family page
                }

            }
            ?>

        </div>
    </main>

    <?php
    // footer for website
    include "php-backend/std-footer.php"
    ?>

    <!-- loading ajax into filter page  -->
    <script src="js/main.js"></script>

</body>

</html>