<!--
  IAT 352 with Prof. Helmine Serban
  D101 with Fatemeh Salehian-Kia
  Beak & Spur
  Bread-wy Woo

  process-login-form.php

  Main reference is from HTML & CSS: Design and Build Websites by Jon Duckett.
  Other references will be noted at appropriate sections of this file.
-->

<?php

// Source: https://stackoverflow.com/questions/17333901/php-form-on-submit-stay-on-same-page

// Main procedure
if(isset($_POST["login"]) && !empty($_POST["login"])) {

  // 0 - Import helper methods and procedures.
  include "helpers/db-connection-methods.php";
  include "helpers/query-append-methods.php";
  include "helpers/query-perform-methods.php";

  // 1A & 1B - Define and validate form responses for the registered member.
  // Already handled by login-complete.php

  // 2 - Open a connection to the josh_fenandez database.
  $db_connection = openDBConnection();

  // 3A - Define query attributes.
  $list_of_attributes = "*";
  $list_of_tables = "members";

  $list_of_conditions = "";
  $login_username_clause = "members.username = " . wrapInSingleQuotes($login_username, true);
  appendWithAndTerm($login_username_clause, $list_of_conditions, false);
  $login_password_clause = "members.password = " . wrapInSingleQuotes($login_password, true);
  appendWithAndTerm($login_password_clause, $list_of_conditions, false);

  // 3B - Write the SELECT SQL query.
  $result = writeSelectQuery($db_connection, $list_of_attributes, $list_of_tables, $list_of_conditions);


} // End of main procedure. Return to login-complete.php.

?>
