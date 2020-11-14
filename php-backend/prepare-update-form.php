<!--
  IAT 352 with Prof. Helmine Serban
  D101 with Fatemeh Salehian-Kia
  Beak & Spur
  Bread-wy Woo

  prepare-update-form.php

  Main reference is from HTML & CSS: Design and Build Websites by Jon Duckett.
  Other references will be noted at appropriate sections of this file.
-->

<?php

// Source: https://stackoverflow.com/questions/17333901/php-form-on-submit-stay-on-same-page

// Main procedure

// 0 - Import helper methods and procedures and start a session.
include "helpers/db-connection-methods.php";
include "helpers/query-append-methods.php";
include "helpers/query-perform-methods.php";
include "helpers/form-analysis-methods.php";

session_start();
$logged_user = (!empty($_SESSION["logged_user"]) ? initializeField($_SESSION["logged_user"]) : "");
$result = "";

if(isset($logged_user)) {

  // 1 - Open a connection to the josh_fernandez database.
  $db_connection = openDBConnection();

  // 2A - Define query attributes. (Goal: Retrieve the user's password hash value.)
  $list_of_attributes = "*";
  $list_of_tables = "members";

  $list_of_conditions = "";
  $login_username_clause = "members.username = " . wrapInSingleQuotes($logged_user, true);
  appendWithAndTerm($list_of_conditions, $login_username_clause, false);

  // 2B - Write the SELECT SQL query.
  $result = writeSelectQuery($db_connection, $list_of_attributes, $list_of_tables, $list_of_conditions);

}


// End of main procedure. Return to update-profile.php.

?>
