<!DOCTYPE html>
<html lang="en">

<head>
    <title>Explore</title>
    <!-- details regarding the file -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Explore fonts on Beak & Spur: a community for exploring, sharing and remixing open source typography">
    <meta name="keywords" content="HTML,CSS,JavaScript,PHP">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="p:domain_verify" content="08e8999c41c6d49126256ccafec71782" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- reference the css file-->
    <link rel="stylesheet" href="css/main.css">

</head>

<body class="explore">

    <?php
    include "php-backend/set-header.php"
    ?>


    <main>
        <div class="explore-slideshow">

            <div class="explore-container">
                <a href="explore-prev">&#10094;</a>

                <div class="explore-slide">
                    <h6 class="margin-bottom-lv1">4 Styles</h6>
                    <h5>Designed by <span class="italic">Tyler Finck</span></h5>
                    <h1 style='font-size: 7em; font-family:LeagueGothic'>League Gothic</h1>

                    <div class="explore-font-tags-container">
                        <div class="explore-font-tags">
                            <img src="../assets/img/tag-lines.png" alt="no tag lines">
                            <h6>Serif</h6>
                        </div>

                        <div class="explore-font-tags">
                            <img src="../assets/img/tag-lines.png" alt="no tag lines">
                            <h6>Slab Serif</h6>
                        </div>

                    </div>
                </div>

                <a href="explore-next">&#10095;</a>
            </div>

            <footer>
                <div class="explore-nav-container">
                    <div class="explore-slidecontainer">
                        <label class="explore-slidecontainer-style">Font-Size</label>
                        <input type="range" min="1" max="100" value="50" id="myRange">
                    </div>
                    <div class="explore-slidecontainer">
                        <label>Font-Weight</label>
                        <input type="range" min="1" max="100" value="50" id="myRange">
                    </div>

                    <button>Italicize</button>
                </div>

                <button>View Font Family</button>
            </footer>

        </div>

        <script>
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

</body>

</html>