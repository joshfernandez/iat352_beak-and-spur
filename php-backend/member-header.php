<header>

    <nav>
        <div class="left-links">
            <a href="index.php" id="nav-home-button">
                beak & spur
            </a>
            <a href="filter.php" id="nav-search-button">Search for Typefaces</a>
        </div>
        <!-- <input type="text" placeholder="Search.."> -->

        <div class="dropdown">
            <?php if (isset($profile_img)) {
                echo '<img src="data:image/jpeg;base64,' . base64_encode($profile_img) . '" alt="profile image" class="person-icon" />';
            } else {
                echo '<img class="person-icon" src="https://img.icons8.com/material-sharp/64/000000/person-male.png" />';
            }
            ?>
            <button class="dropbtn">˅</button>
            <h4></h4>
            <div class="dropdown-content">
                <a href="user-page.php">Your Fonts</a>
                <a href="update-profile.php">Preferences</a>
                <a href="php-backend/log-out.php">Log Out</a>
            </div>
        </div>
    </nav>

</header>