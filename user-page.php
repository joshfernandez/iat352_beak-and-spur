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
    <nav class="explore-nav">
        <div class="flex">
            <h5>Home</h5>
            <h5 class="margin-left-lv3">Search for Typefaces</h5>
        </div>
        <img src="../assets/img/designer-img.png" alt="designer-img">
    </nav>

    <main class="margin-top-lv8">
        <!-- SEARCH BAR -->
        <form class="filter-searchbar" autocomplete="off">
            <input type="text" id="font-name" name="font-name" placeholder="Find fonts by name, type, year">
        </form>

        <!-- PRIMARY FILTER -->
        <form class="filter-primary">
            <h5 class="margin-bottom-lv1">Primary Filters</h5>
            <input type="checkbox" id="serif" name="serif">
            <label> Serif</label><br>
            <input type="checkbox" id="sans-serif" name="sans-serif">
            <label>Sans Serif</label><br>
        </form>

        <form class="filter-secondary">
            <h5 class="margin-bottom-lv1">Secondary Filters</h5>
            <input type="checkbox" id="glyphic-serif" name="glyphic-serifs">
            <label>Glyphic Serifs</label><br>
            <input type="checkbox" id="slab-serif" name="slab-serif">
            <label>Slab Serif</label><br>
            <input type="checkbox" id="geometric-sans-serif" name="geometric-sans-serif">
            <label>Geometric Sans-Serif</label><br>
            <input type="checkbox" id="humanist-typeface" name="humanist-typeface">
            <label>Humanist Typefacess</label><br>
        </form>

        <div class="filter-tags">
            <h5 class="margin-bottom-lv1">Filter by Tags</h5>
            <div class="filter-tags-draggable">
                <br><br><br><br><br>
            </div>
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