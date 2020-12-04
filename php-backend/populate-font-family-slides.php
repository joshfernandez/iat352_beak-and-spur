<!--
  IAT 352 with Prof. Helmine Serban
  D101 with Fatemeh Salehian-Kia
  Beak & Spur
  Bread-wy Woo

  populate-font-family-slides.php

-->

<?php
  // 0 - Import helper methods and procedures.
  include "helpers/db-connection-methods.php";
  include "helpers/query-append-methods.php";
  include "helpers/query-perform-methods.php";

  // Check if a session is on-going.
  session_start();
  $logged_user = (!empty($_SESSION["logged_user"]) ? initializeField($_SESSION["logged_user"]) : "");
  $result = "";

  // 2 - Open a connection to the josh_fenandez database.
  $db_connection = openDBConnection();

  // 3 - SELECT query to access full rows in the database
  $font_families_result = $db_connection -> query("SELECT * FROM font_families;");

  if(!$font_families_result) {
    die("Database query failed.");
  }

  // 4 - Populate the explore page with slides.
  // Copied from populate-font-type-checkboxes.php
  while ($font_family_arr = mysqli_fetch_assoc($font_families_result)) {

    // retrieve font name, designer name, tags from database
    $family_id_display = $font_family_arr['family_id'];
    $family_name_display = $font_family_arr['family_name'];
    $designer_name_display = $font_family_arr['designer'];
    $tags_display = $font_family_arr['font_type'];

    // Assign Associative Array into a variable
    $tagsArray = (explode(",", $tags_display));

    // Get size of Assoc Array
    $tagsArraySize = sizeof($tagsArray);

    echo "<div class=\"explore-slide\">"

    // display designer name & font-family name
    echo "<h6 class='margin-bottom-lv1'></h6>
    <h5>Designed by <span class='italic'>$designer_name_display</span></h5>
    <h1 style='font-size: 7em; font-family:LeagueGothic'>$family_name_display</h1>";

    echo "<div class=\"explore-font-tags-container\">";

    // run a for loop to dynamically generate all tags
    for ($x = 0; $x < $tagsArraySize; $x++) {
        // grab assoc array values and put in variables
        $tagsPrint = $tagsArray[$x];
        echo "<div class='explore-font-tags'>
        <img src='../assets/img/tag-lines.png' alt='no tag lines'>
        <h6>$tagsPrint</h6>
        </div> ";
    }

    echo "</div>"; // Closes explore-font-tags-container

    echo "<a href=\"font-family-page.php?varname=" . $family_id_display . "\">View Font Family</a>";

    echo "</div>"; // Closes explore-slide

  };

  // 5 - Release returned data.
  mysqli_free_result($font_families_result);

  // 6 - Close the database connection.
  mysqli_close($db_connection);

?>
