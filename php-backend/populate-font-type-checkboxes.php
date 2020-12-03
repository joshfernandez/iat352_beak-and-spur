<!--
  IAT 352 with Prof. Helmine Serban
  D101 with Fatemeh Salehian-Kia
  Beak & Spur
  Bread-wy Woo

  populate-font-type-checkboxes.php

  Main reference is from HTML & CSS: Design and Build Websites by Jon Duckett.
  Other references will be noted at appropriate sections of this file.
-->

<?php

// 0 - Import helper methods and procedures and start a session.
include "helpers/db-connection-methods.php";
include "helpers/form-analysis-methods.php";

session_start();
$logged_user = (!empty($_SESSION["logged_user"]) ? initializeField($_SESSION["logged_user"]) : "");
$result = "";


if (isset($logged_user)) {

    // 1 - Open a connection to the josh_fernandez database.
    $db_connection = openDBConnection();

    // 2 - Write the SELECT SQL query.
    // Copied from filter-options.php
    $font_types_result = $db_connection->query("SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='members' AND COLUMN_NAME='favourite_font_types'");

    if(!$font_types_result) {
      die("Database query failed.");
    }

    // Copied from filter.php
    while ($font_types_arr = mysqli_fetch_assoc($font_types_result)) {
        $font_type_string = "";
        $font_type_string .= serialize($font_types_arr);
        $font_type_string = substr($font_type_string, 35);
        $font_type_string = rtrim($font_type_string, ')";}');
        $font_types = explode(",", $font_type_string);

        foreach ($font_types as $font_type) {
            $font_type = trim($font_type, "'");

            // Source: https://www.w3schools.com/php/func_string_ucfirst.asp
            echo "<input type=\"checkbox\" name=\"fav-font-types[]\" value=" . $font_type . "/> " . ucfirst($font_type) . "<br />";
        }
    };

    // 5 - Release returned data.
    mysqli_free_result($font_types_result);

    // 6 - Close the database connection.
    mysqli_close($db_connection);

}

// End of main procedure. Return to preferences.php.

?>
