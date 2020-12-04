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
    // header varies between member and visitor
    include "php-backend/set-header.php";

    // 0 - Import helper methods and procedures
    include "php-backend/helpers/form-analysis-methods.php";

    ?>

    <main>
        <div class="explore-slideshow">

            <div class="explore-container">
                <a onclick="plusSlides(-1)">&#10094;</a>

                <?php include "php-backend/populate-font-family-slides.php"; ?>

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
