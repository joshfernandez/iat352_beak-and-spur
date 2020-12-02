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

<!-- The onload functions serve two purposes
1. filter_suggestion() intitally loads all the font content blocks
2. getCheckboxes() retrieves the state of all checkboxes with the class (checkbox-item) -->

<body class="filter" onload="filter_suggestion(); getCheckboxes();">

    <?php
    include "php-backend/set-header.php";
    include "php-backend/filter-options.php";
    include "php-backend/filter-populator.php";
    ?>

    <main class="margin-top-lv8">
        <form class="filter-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <!-- SEARCH BAR -->
            <!-- When a key input is clicked, run AJAX -->
            <div class="filter-searchbar" autocomplete="off">
                <input type="text" id="searchbar_f" name="searchbar_f" placeholder="Find fonts by name, type, year"
                    onKeyUp="filter_suggestion()">
                <input type="submit" name="submit" value="Search For Type">
            </div>

            <!-- PRIMARY FILTER TAG CONTENT -->
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
    <input onClick="getCheckboxes();"
    class="checkbox-item" 
    type="checkbox" ' . $check . '
    id="' . $font_type . '" 
    name="font_type_filter[' . $font_type . ']"             
    value="' . $font_type . '"
    >
    <label 
    for="' . $font_type . '"
    >
        ' . $font_type . '
        </label>
    </span>';}
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
    class="checkbox-item" 
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

        <div id="filter-container">
            <!-- display the filter font-content blocks in here -->
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