<!--
  IAT 352 with Prof. Helmine Serban
  D101 with Fatemeh Salehian-Kia
  Beak & Spur
  Bread-wy Woo

  process-preferences.php

  Main reference is from HTML & CSS: Design and Build Websites by Jon Duckett.
  Other references will be noted at appropriate sections of this file.
-->

<?php

// Solves an unusual problem: elements in $fav_font_types end with a forward slash
function removeEndingForwardSlash(&$item) {
  if($item[strlen($item) - 1] == '/') {
    return rtrim($item, '/');
  }
  else {
    return $item;
  }
}

function appendWithCommaNoSpaces(&$list_items, $item, $is_wrapped) {
  if(empty($list_items)) {
    $list_items .= wrapInSingleQuotes($item, $is_wrapped);
  }
  else {
    $list_items .= "," . wrapInSingleQuotes($item, $is_wrapped);
  }
}

// Main procedure
// helpers/form-analysis-methods.php has already been imported.
if(isFormSubmitted($_POST["update-preferences"])) {

  // 0 - Import helper methods and procedures.
  include "helpers/db-connection-methods.php";
  include "helpers/query-append-methods.php";
  include "helpers/query-perform-methods.php";
  include "helpers/file-upload-methods.php";

  // 1A & 1B - Define and validate form responses for the registered member.
  // Already handled by update-profile-complete.php

  // 3 - Open a connection to the josh_fernandez database.
  $db_connection = openDBConnection();

  // 4A - Define query attributes.
  $table_name = "members";

  $list_of_fav_font_types = "";
  foreach ($fav_font_types as $font_type) {
    appendWithCommaNoSpaces($list_of_fav_font_types, removeEndingForwardSlash($font_type), false);
  }

  $list_of_updates = "";
  appendWithComma($list_of_updates,
    "members.favourite_font_types = " . wrapInSingleQuotes($list_of_fav_font_types, true), false);

  $list_of_conditions = "";
  appendWithComma($list_of_conditions,
    "members.username = " . wrapInSingleQuotes($logged_user, true), false);

  // 4B - Write the UPDATE SQL query.
  $result = writeUpdateQuery($db_connection, $table_name, $list_of_updates, $list_of_conditions);

  // 5 - Close the database connection.
  closeDBConnection($db_connection);


} // End of main procedure. Return to preferences-complete.php.

?>
