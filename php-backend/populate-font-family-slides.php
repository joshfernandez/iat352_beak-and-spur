<!--
  IAT 352 with Prof. Helmine Serban
  D101 with Fatemeh Salehian-Kia
  Beak & Spur
  Bread-wy Woo

  populate-font-family-slides.php

-->

<?php
  // 0 - Import helper methods and procedures.
  // Already done in set-header.php

  function isSuggestedFontFamily($fav_types_list, $family_types_list) {

    foreach($fav_types_list as $fav_type) {
      if(!in_array($fav_type, $family_types_list)) {
        return false;
      }
    }

    return true;

  }

  // Session is already declared in set_header.php.

  /***********
    Helper methods
  ***********/

  // Case A: For the member
  function populateSlidesForMember($logged_user) {

    // 2 - Open a connection to the josh_fenandez database.
    $db_connection = openDBConnection();

    // 3 - SELECT query to access full rows in the database
    $font_families_result = $db_connection -> query("SELECT * FROM font_families;");

    if(!$font_families_result) {
      die("Database query failed.");
    }

    // 4A - Write the SELECT SQL query for the user's favourite font types.
    $fav_types_query = "SELECT members.favourite_font_types FROM members WHERE members.username = '" . $logged_user ."';";

    $fav_types_result = $db_connection->query($fav_types_query);

    if(!$fav_types_result) {
      die("Database query failed.");
    }

    // 4B - Extract the list of favourite types.
    $fav_types_list_str = mysqli_fetch_row($fav_types_result)[0];
    $fav_types_list = explode(",", $fav_types_list_str);

    // 4 - Populate the explore page with slides.
    // Copied from populate-font-type-checkboxes.php
    while ($font_family_arr = mysqli_fetch_assoc($font_families_result)) {

      // First, retrieve font family's tags.
      $tags_display = $font_family_arr['font_type'];
      // Assign Associative Array into a variable
      $tagsArray = (explode(",", $tags_display));

      // Only print if it is a suggested font family.
      if(isSuggestedFontFamily($fav_types_list, $tagsArray)) {

        // Get size of Assoc Array
        $tagsArraySize = sizeof($tagsArray);

        // retrieve font name, designer name, tags from database
        $family_id_display = $font_family_arr['family_id'];
        $family_name_display = $font_family_arr['family_name'];
        $designer_name_display = $font_family_arr['designer'];

        echo "<div class=\"explore-slide\">";

        // display designer name & font-family name
        echo "<h6 class='margin-bottom-lv1'></h6>" .
        "<h5>Designed by <span class='italic'>$designer_name_display</span></h5>" .
        "<h1 style='font-size: 7em; font-family:LeagueGothic'>$family_name_display</h1>";

        echo "<div class=\"explore-font-tags-container\">";

        // run a for loop to dynamically generate all tags
        for ($x = 0; $x < $tagsArraySize; $x++) {
            // grab assoc array values and put in variables
            $tagsPrint = $tagsArray[$x];
            echo "<div class='explore-font-tags'>" .
            "<img src='../assets/img/tag-lines.png' alt='no tag lines'>" .
            "<h6>$tagsPrint</h6>" .
            "</div> ";
        }

        echo "</div>"; // Closes explore-font-tags-container

        echo "<a href=\"font-family-page.php?varname=" . $family_id_display . "\">View Font Family</a>";

        echo "</div>"; // Closes explore-slide

      }

    };

    // 5 - Release returned data.
    mysqli_free_result($font_families_result);
    mysqli_free_result($fav_types_result);

    // 6 - Close the database connection.
    mysqli_close($db_connection);

  }


  // Case B: For the visitor
  function populateSlidesDefault() {

    // 2 - Open a connection to the josh_fenandez database.
    $db_connection = openDBConnection();

    // 3 - SELECT query to access full rows in the database
    $font_families_result = $db_connection -> query("SELECT * FROM font_families;");

    if(!$font_families_result) {
      die("Database query failed.");
    }

    // // 4A - Write the SELECT SQL query for the user's favourite font types.
    // $fav_types_query = "SELECT members.favourite_font_types FROM members WHERE members.username = '" . $logged_user ."';";
    //
    // $fav_types_result = $db_connection->query($fav_types_query);
    //
    // if(!$fav_types_result) {
    //   die("Database query failed.");
    // }
    //
    // // 4B - Extract the list of favourite types.
    // $fav_types_list_str = mysqli_fetch_row($fav_types_result)[0];
    // $fav_types_list = explode(",", $fav_types_list_str);

    // 4 - Populate the explore page with slides.
    // Copied from populate-font-type-checkboxes.php
    while ($font_family_arr = mysqli_fetch_assoc($font_families_result)) {

      // First, retrieve font family's tags.
      $tags_display = $font_family_arr['font_type'];
      // Assign Associative Array into a variable
      $tagsArray = (explode(",", $tags_display));

      // Only print if it is a suggested font family.
      // if(isSuggestedFontFamily($fav_types_list, $tagsArray)) {

        // Get size of Assoc Array
        $tagsArraySize = sizeof($tagsArray);

        // retrieve font name, designer name, tags from database
        $family_id_display = $font_family_arr['family_id'];
        $family_name_display = $font_family_arr['family_name'];
        $designer_name_display = $font_family_arr['designer'];

        echo "<div class=\"explore-slide\">";

        // display designer name & font-family name
        echo "<h6 class='margin-bottom-lv1'></h6>" .
        "<h5>Designed by <span class='italic'>$designer_name_display</span></h5>" .
        "<h1 style='font-size: 7em; font-family:LeagueGothic'>$family_name_display</h1>";

        echo "<div class=\"explore-font-tags-container\">";

        // run a for loop to dynamically generate all tags
        for ($x = 0; $x < $tagsArraySize; $x++) {
            // grab assoc array values and put in variables
            $tagsPrint = $tagsArray[$x];
            echo "<div class='explore-font-tags'>" .
            "<img src='../assets/img/tag-lines.png' alt='no tag lines'>" .
            "<h6>$tagsPrint</h6>" .
            "</div> ";
        }

        echo "</div>"; // Closes explore-font-tags-container

        echo "<a href=\"font-family-page.php?varname=" . $family_id_display . "\">View Font Family</a>";

        echo "</div>"; // Closes explore-slide

      // }

    };

    // 5 - Release returned data.
    mysqli_free_result($font_families_result);

    // 6 - Close the database connection.
    mysqli_close($db_connection);

  }

  // Back to the main procedure: Go to the corresponding code for either visitor or member.
  if(isset($logged_user) && !empty($logged_user)) {
    populateSlidesForMember($logged_user);
  }
  else {
    populateSlidesDefault();
  }

?>
