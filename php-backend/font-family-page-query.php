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

  // 2 - Open a connection to the josh_fenandez database.
  $db_connection = openDBConnection();

  // 3A - Write Query and store in variables

  // PRINT VALUES DYAMICALLY BASED ON WHAT THE USER CLICKS
//   $fontBlockid = return id from font block

    
  $fontname = $db_connection -> query("SELECT family_name FROM font_families WHERE family_id = '1'");
  $fontdesigner = $db_connection -> query("SELECT designer FROM font_families WHERE family_id = '1'");
  $fontlicence = $db_connection -> query("SELECT licence FROM font_families WHERE family_id = '1'");
  $fontlanguages = $db_connection -> query("SELECT languages FROM font_families WHERE family_id = '1'");
  $fonttype = $db_connection -> query("SELECT font_type FROM font_families WHERE family_id = '1'");
  
//   $author = $db_connection 

  //right now i'm echoing the query.
  // i need to retrieve the results from the query..


?>