<!--
  IAT 352 with Prof. Helmine Serban
  D101 with Fatemeh Salehian-Kia
  Beak & Spur
  Bread-wy Woo

  font-family-page-query.php

-->

<?php


// 0 - Import helper methods and procedures.
// include "helpers/db-connection-methods.php";
// include "helpers/query-append-methods.php";
// include "helpers/query-perform-methods.php";

// 2 - Open a connection to the josh_fenandez database.
// $db_connection = openDBConnection();



// 3 - queries to access rows in the database    
$font_types_result = $db_connection->query("SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='font_families' AND COLUMN_NAME='font_type'");
$font_xheights_result = $db_connection->query("SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='font_families' AND COLUMN_NAME='x_height'");  
// $row = $result->fetch_assoc();


// $fontnames = $db_connection->query("SELECT family_name FROM font_families WHERE family_id = '1'");

// // 4 - queries to retrieve JPEG blobs 
// $designerimg = $db_connection->query("SELECT profile_img FROM members WHERE username = 'eathnma'");



?>