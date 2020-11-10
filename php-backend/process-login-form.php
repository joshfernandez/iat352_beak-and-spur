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

function appendWithAndTerm($clause, &$list_clauses) {
  if(empty($list_clauses)) {
    $list_clauses .= $clause;
  }
  else {
    $list_clauses .= " AND " . $clause;
  }
}

// Main procedure
if(isset($_POST["login"]) && !empty($_POST["login"])) {

  // 1A & 1B - Define and validate form responses for the registered member.
  // Already handled by login-complete.php

  // 2 - Open a connection to the josh_fenandez database.
  include "open-db-connection.php";

  // 3A - Define query attributes.
  $list_of_attributes = "*";
  $list_of_tables = "members";

  $list_of_conditions = "";
  $login_username_clause = "members.username = '" . $login_username . "'";
  appendWithAndTerm($login_username_clause, $list_of_conditions);
  $login_password_clause = "members.password = '" . $login_password . "'";
  appendWithAndTerm($login_password_clause, $list_of_conditions);

  // 3B - Write the SELECT SQL query.
  $select_query = "SELECT " . $list_of_attributes .
            " FROM " . $list_of_tables .
            " WHERE " . $list_of_conditions . ";";

  $result = mysqli_query($db_connection, $select_query);

  if(!$result) {
    die("Database query failed.");
  }


} // End of main procedure. Return to login-complete.php.

?>
