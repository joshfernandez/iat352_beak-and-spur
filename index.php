<!DOCTYPE html>
<html lang="en">

<head>
    <title>Explore</title>
    <!-- details regarding the file -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Explore fonts on Beak & Spur: a community for exploring, sharing and remixing open source typography">
    <meta name="keywords" content="HTML,CSS,JavaScript,PHP">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="p:domain_verify" content="08e8999c41c6d49126256ccafec71782" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- reference the css file-->
    <link rel="stylesheet" href="css/main.css">

</head>

<body class="explore">

    <?php
    // load font-family page helper 
    include "php-backend/index-query.php";

    // header varies between member and visitor
    include "php-backend/set-header.php";

    // 0 - Import helper methods and procedures
    include "php-backend/helpers/form-analysis-methods.php";

    ?>

    <main>
        <div class="explore-slideshow">

            <div class="explore-container">
                <a onclick="plusSlides(-1)">&#10094;</a>
                <!--                 
                in PA3, i will work on putting these content blocks into a for loop,
                so they will be dynamically generated  -->

                <!-- SLIDE ONE -->
                <div class="explore-slide">
                    <?php
                    while ($firstRow = mysqli_fetch_assoc($firstFontQuery)) {
                        // retrieve font name, designer name, tags from database
                        $family_id_display = $firstRow['family_id'];
                        $family_name_display = $firstRow['family_name'];
                        $designer_name_display = $firstRow['designer'];
                        $tags_display = $firstRow['font_type'];

                        // Assign Associative Array into a variable
                        $tagsArray = (explode(",", $tags_display));

                        // Get size of Assoc Array
                        $tagsArraySize = sizeof($tagsArray);

                        // display designer name & font-family name
                        echo "<h6 class='margin-bottom-lv1'></h6>
                    <h5>Designed by <span class='italic'>$designer_name_display</span></h5>
                    <h1 class='family-name' style='font-family:LeagueGothic'>$family_name_display</h1>";
                    }
                    ?>
                    <div class='explore-font-tags-container'>
                        <?php
                        // run a for loop to dynamically generate all tags
                        for ($x = 0; $x < $tagsArraySize; $x++) {
                            // grab assoc array values and put in variables
                            $tagsPrint = $tagsArray[$x];
                            echo "<div class='explore-font-tags'>
                            <img src='../assets/img/tag-lines.png' alt='no tag lines'>
                            <h6>$tagsPrint</h6>
                        </div> ";
                        }
                        ?>
                    </div>
                    <a href="font-family-page.php?varname=<?php echo $family_id_display ?>">
                        View Font Family</a>
                </div>

                <!-- SLIDE TWO -->
                <div class="explore-slide">
                    <?php
                    while ($secondRow = mysqli_fetch_assoc($secondFontQuery)) {
                        // retrieve font name, designer name, tags from database
                        $family_id_display = $secondRow['family_id'];
                        $family_name_display = $secondRow['family_name'];
                        $designer_name_display = $secondRow['designer'];
                        $tags_display = $secondRow['font_type'];

                        // Assign Associative Array into a variable
                        $tagsArray = (explode(",", $tags_display));

                        // Get size of Assoc Array
                        $tagsArraySize = sizeof($tagsArray);

                        // display designer name & font-family name
                        echo "<h6 class='margin-bottom-lv1'></h6>
                    <h5>Designed by <span class='italic'>$designer_name_display</span></h5>
                    <h1 class='family-name' style='font-family:LeagueGothic'>$family_name_display</h1>";
                    }
                    ?>
                    <div class='explore-font-tags-container'>
                        <?php
                        // run a for loop to dynamically generate all tags
                        for ($x = 0; $x < $tagsArraySize; $x++) {
                            // grab assoc array values and put in variables
                            $tagsPrint = $tagsArray[$x];
                            echo "<div class='explore-font-tags'>
                            <img src='../assets/img/tag-lines.png' alt='no tag lines'>
                            <h6>$tagsPrint</h6>
                        </div> ";
                        }
                        ?>
                    </div>
                    <a href="font-family-page.php?varname=<?php echo $family_id_display ?>">
                        View Font Family</a>
                </div>

                <!-- SLIDE THREE -->
                <div class="explore-slide">
                    <?php
                    while ($thirdRow = mysqli_fetch_assoc($thirdFontQuery)) {
                        // retrieve font name, designer name, tags from database
                        $family_id_display = $thirdRow['family_id'];
                        $family_name_display = $thirdRow['family_name'];
                        $designer_name_display = $thirdRow['designer'];
                        $tags_display = $thirdRow['font_type'];

                        // Assign Associative Array into a variable
                        $tagsArray = (explode(",", $tags_display));

                        // Get size of Assoc Array
                        $tagsArraySize = sizeof($tagsArray);

                        // display designer name & font-family name
                        echo "<h6 class='margin-bottom-lv1'></h6>
                    <h5>Designed by <span class='italic'>$designer_name_display</span></h5>
                    <h1 class='family-name' style='font-family:LeagueGothic'>$family_name_display</h1>";
                    }
                    ?>
                    <div class='explore-font-tags-container'>
                        <?php
                        // run a for loop to dynamically generate all tags
                        for ($x = 0; $x < $tagsArraySize; $x++) {
                            // grab assoc array values and put in variables
                            $tagsPrint = $tagsArray[$x];
                            echo "<div class='explore-font-tags'>
                            <img src='../assets/img/tag-lines.png' alt='no tag lines'>
                            <h6>$tagsPrint</h6>
                        </div> ";
                        }
                        ?>
                    </div>
                    <a href="font-family-page.php?varname=<?php echo $family_id_display ?>">
                        View Font Family</a>
                </div>

                <!-- SLIDE FOUR -->
                <div class="explore-slide">
                    <?php
                    while ($fourthRow = mysqli_fetch_assoc($fourthFontQuery)) {
                        // retrieve font name, designer name, tags from database
                        $family_id_display = $fourthRow['family_id'];
                        $family_name_display = $fourthRow['family_name'];
                        $designer_name_display = $fourthRow['designer'];
                        $tags_display = $fourthRow['font_type'];

                        // Assign Associative Array into a variable
                        $tagsArray = (explode(",", $tags_display));

                        // Get size of Assoc Array
                        $tagsArraySize = sizeof($tagsArray);

                        // display designer name & font-family name
                        echo "<h6 class='margin-bottom-lv1'></h6>
                    <h5>Designed by <span class='italic'>$designer_name_display</span></h5>
                    <h1 class='family-name' style='font-family:LeagueGothic'>$family_name_display</h1>";
                    }
                    ?>
                    <div class='explore-font-tags-container'>
                        <?php
                        // run a for loop to dynamically generate all tags
                        for ($x = 0; $x < $tagsArraySize; $x++) {
                            // grab assoc array values and put in variables
                            $tagsPrint = $tagsArray[$x];
                            echo "<div class='explore-font-tags'>
                            <img src='../assets/img/tag-lines.png' alt='no tag lines'>
                            <h6>$tagsPrint</h6>
                        </div> ";
                        }
                        ?>
                    </div>
                    <a href="font-family-page.php?varname=<?php echo $family_id_display ?>">
                        View Font Family</a>
                </div>

                <!-- SLIDE FIVE -->
                <div class="explore-slide">
                    <?php
                    while ($fifthRow = mysqli_fetch_assoc($fifthFontQuery)) {
                        // retrieve font name, designer name, tags from database
                        $family_id_display = $fifthRow['family_id'];
                        $family_name_display = $fifthRow['family_name'];
                        $designer_name_display = $fifthRow['designer'];
                        $tags_display = $fifthRow['font_type'];

                        // Assign Associative Array into a variable
                        $tagsArray = (explode(",", $tags_display));

                        // Get size of Assoc Array
                        $tagsArraySize = sizeof($tagsArray);

                        // display designer name & font-family name
                        echo "<h6 class='margin-bottom-lv1'></h6>
                    <h5>Designed by <span class='italic'>$designer_name_display</span></h5>
                    <h1 class='family-name' style='font-family:LeagueGothic'>$family_name_display</h1>";
                    }
                    ?>
                    <div class='explore-font-tags-container'>
                        <?php
                        // run a for loop to dynamically generate all tags
                        for ($x = 0; $x < $tagsArraySize; $x++) {
                            // grab assoc array values and put in variables
                            $tagsPrint = $tagsArray[$x];
                            echo "<div class='explore-font-tags'>
                            <img src='../assets/img/tag-lines.png' alt='no tag lines'>
                            <h6>$tagsPrint</h6>
                        </div> ";
                        }
                        ?>
                    </div>
                    <a href="font-family-page.php?varname=<?php echo $family_id_display ?>">
                        View Font Family</a>
                </div>

                <a onclick="plusSlides(1)">&#10095;</a>
            </div>

            <footer>
                <div class=" explore-nav-container">
                    <div class="explore-slidecontainer">
                        <label class="explore-slidecontainer-style">Font-Size</label>
                        <input type="range" min="8" max="300" value="90" id="sizeRange">
                    </div>
                    <div class="explore-slidecontainer">
                        <label>Font-Weight</label>
                        <input type="range" min="100" step="100" max="900" value="400" id="weightRange">
                    </div>

                    <!-- <div class=""> -->

                    <input type="checkbox" id="italicize">

                    <label class="explore-slidecontainer" for="italicize">


                        Italicize</label>

                    <!-- </div> -->
                </div>
                <!-- <a href="font-family-page.php?varname=" 
                >View Font Family</a>  
              
                    // echo $family_id_display;
                ?> -->
                <!-- <form method="post" action="font-family-page.php">
                        <input type="hidden" name="varname" value=''>
                        <input type="submit" value="View Font Family" name="submit">
                        </form> -->


            </footer>

        </div>

        <script>
            // slideshow code 
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("explore-slide");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slides[slideIndex - 1].style.display = "block";
            }
        </script>


    </main>

    <!-- <script>
        
    </script> -->
    <script src="js/main.js"> </script>
</body>

</html>