<!--
  IAT 352 with Prof. Helmine Serban
  D101 with Fatemeh Salehian-Kia
  Beak & Spur
  Bread-wy Woo

  process-update-form.php

  Main reference is from HTML & CSS: Design and Build Websites by Jon Duckett.
  Other references will be noted at appropriate sections of this file.
-->

<?php

// Source: https://stackoverflow.com/questions/17333901/php-form-on-submit-stay-on-same-page

// Main procedure
// helpers/form-analysis-methods.php has already been imported.
if(isFormSubmitted($_POST["update-profile"])) {

  // 0 - Import helper methods and procedures.
  include "helpers/db-connection-methods.php";
  include "helpers/query-append-methods.php";
  include "helpers/query-perform-methods.php";
  include "helpers/file-upload-methods.php";

  // 1A & 1B - Define and validate form responses for the registered member.
  // Already handled by update-profile-complete.php

  // 2 - Open a connection to the josh_fernandez database.
  $db_connection = openDBConnection();

  // 3A - Define query attributes.
  $table_name = "members";

  $list_of_updates = "";
  appendWithComma($list_of_updates,
    "members.username = " . wrapInSingleQuotes($updated_username, true), false);
  appendWithComma($list_of_updates,
    "members.email = " . wrapInSingleQuotes($updated_email, true), false);
  appendWithComma($list_of_updates,
    "members.password = " . wrapInSingleQuotes($updated_pwhash, true), false);
  appendWithComma($list_of_updates,
    "members.mem_description = " . wrapInSingleQuotes($updated_mem_desc, true), false);
  appendWithComma($list_of_updates,
    "members.display_name = " . wrapInSingleQuotes($updated_display_name, true), false);
  appendWithComma($list_of_updates,
    "members.profile_img = " . wrapInSingleQuotes($updated_profile_image_name, true), false);

  $list_of_conditions = "";
  appendWithComma($list_of_conditions,
    "members.username = " . wrapInSingleQuotes("josh.fernandez", true), false);
  // appendWithComma($list_of_conditions,
  //   "members.username = " . wrapInSingleQuotes($original_username, true), false);

  // 3B - Write the UPDATE SQL query.
  $result = writeUpdateQuery($db_connection, $table_name, $list_of_updates, $list_of_conditions);

  // 4 - Close the database connection.
  closeDBConnection($db_connection);

  // 5 - Upload the user's profile image.
  uploadImage($updated_profile_image);


} // End of main procedure. Return to register-complete.php.

?>
