<!--
  IAT 352 with Prof. Helmine Serban
  D101 with Fatemeh Salehian-Kia
  Beak & Spur
  Bread-wy Woo

  process-reg-form.php

  Main reference is from HTML & CSS: Design and Build Websites by Jon Duckett.
  Other references will be noted at appropriate sections of this file.
-->

<?php

// Source: https://stackoverflow.com/questions/17333901/php-form-on-submit-stay-on-same-page

function appendWithComma($item, &$list_items) {
  if(empty($list_items)) {
    $list_items .= "'" . $item . "'";
  }
  else {
    $list_items .= ", '" . $item . "'";
  }
}

// Main procedure
if(isset($_POST["register"]) && !empty($_POST["register"])) {

  // 1A & 1B - Define and validate form responses for the registered member.
  // Already handled by register-complete.php

  // 2 - Open a connection to the josh_fenandez database.
  include "open-db-connection.php";

  // 3A - Define query attributes.
  $table_name = "members";
  $list_of_columns = "(username, email, password)";

  $list_of_attributes = "";
  appendWithComma($member_username, $list_of_attributes);
  appendWithComma($member_email, $list_of_attributes);
  appendWithComma($member_password, $list_of_attributes);
  $final_list_of_attributes = "(" . $list_of_attributes . ")";

  // 3B - Write the INSERT INTO SQL query.
  $insert_query = "INSERT INTO " . $table_name .
                  " " . $list_of_columns .
                  " VALUES " . $final_list_of_attributes . ";";

  $result = mysqli_query($db_connection, $insert_query);

  if(!$result) {
    die("Database query failed.");
  }

  // 4 - Close the database connection.
  include "close-db-connection.php";


} // End of main procedure. Return to register-complete.php.

?>
