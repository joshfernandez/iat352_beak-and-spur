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

// Main procedure
if(isset($_POST["register"]) && !empty($_POST["register"])) {

  // 0 - Import helper methods and procedures.
  include "helpers/db-connection-methods.php";
  include "helpers/query-append-methods.php";
  include "helpers/query-perform-methods.php";

  // 1A & 1B - Define and validate form responses for the registered member.
  // Already handled by register-complete.php

  // 2 - Open a connection to the josh_fenandez database.
  $db_connection = openDBConnection();

  // 3A - Define query attributes.
  $table_name = "members";
  $list_of_columns = "(username, email, password)";

  $list_of_attributes = "";
  appendWithComma($member_username, $list_of_attributes, true);
  appendWithComma($member_email, $list_of_attributes, true);
  appendWithComma($member_password, $list_of_attributes, true);
  $final_list_of_attributes = "(" . $list_of_attributes . ")";

  // 3B - Write the INSERT INTO SQL query.
  $result = writeInsertQuery($db_connection, $table_name, $list_of_columns, $final_list_of_attributes);

  // 4 - Close the database connection.
  closeDBConnection($db_connection);


} // End of main procedure. Return to register-complete.php.

?>
