<!--
  IAT 352 with Prof. Helmine Serban
  D101 with Fatemeh Salehian-Kia
  Beak & Spur
  Bread-wy Woo

  font-family-page-query.php

-->

<?php
  // 0 - Import helper methods and procedures.
  include "helpers/db-connection-methods.php";
  include "helpers/query-append-methods.php";
  include "helpers/query-perform-methods.php";

  // 2 - Open a connection to the josh_fenandez database.
  $db_connection = openDBConnection();

  // 3 - queries to access full rows in the database 
  $firstFontQuery = $db_connection -> query("SELECT * FROM font_families WHERE family_id = '1'");
  $secondFontQuery = $db_connection -> query("SELECT * FROM font_families WHERE family_id = '2'");
  $thirdFontQuery = $db_connection -> query("SELECT * FROM font_families WHERE family_id = '3'");
  $fourthFontQuery = $db_connection -> query("SELECT * FROM font_families WHERE family_id = '4'");
  $fifthFontQuery = $db_connection -> query("SELECT * FROM font_families WHERE family_id = '5'")
 
?>