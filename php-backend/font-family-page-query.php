<!--
  IAT 352 with Prof. Helmine Serban
  D101 with Fatemeh Salehian-Kia
  Beak & Spur
  Bread-wy Woo

  font-family-page-query.php

-->

<?php

// Main procedure
// helpers/form-analysis-methods.php has already been imported.

  // 0 - Import helper methods and procedures.
  include "helpers/db-connection-methods.php";
  include "helpers/query-append-methods.php";
  include "helpers/query-perform-methods.php";

  // 1A & 1B - Define and validate form responses for the registered member.
  // Already handled by login-complete.php

  // 2 - Open a connection to the josh_fenandez database.
  $db_connection = openDBConnection();

  // 3A - Write Query
  $fontname = $connection -> query("SELECT family_name FROM font_families");

  if(!$fontname){
  echo "<p> Connection Succeeded! </p>";  
}

?>