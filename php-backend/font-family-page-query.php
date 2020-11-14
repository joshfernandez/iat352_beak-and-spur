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

  // ---------------FOR FUTURE REFERENCE (After the explore page is finished)-------------------
  //PRINT VALUES DYAMICALLY BASED ON WHAT THE USER CLICKS
  // $fontBlockid = return id from font block
  // $fontBlockid is used to dynamically generate content of the page you clicked

  // 3 - queries to access rows in the database    
  $fontname = $db_connection -> query("SELECT family_name FROM font_families WHERE family_id = '1'");
  $fontdesigner = $db_connection -> query("SELECT designer FROM font_families WHERE family_id = '1'");
  $fontlicence = $db_connection -> query("SELECT licence FROM font_families WHERE family_id = '1'");
  $fontlanguages = $db_connection -> query("SELECT languages FROM font_families WHERE family_id = '1'");
  $fonttype = $db_connection -> query("SELECT font_type FROM font_families WHERE family_id = '1'");

  // 4 - query to retrieve JPEG blobs 
  $designerimg = $db_connection -> query("SELECT profile_img FROM members WHERE username = 'eathnma'");

  // 5 - query to retrieve TTF blobs
  $fontfile = $db_connection -> query("SELECT font_file FROM individual_fonts WHERE family_id = '1'");
 
?>