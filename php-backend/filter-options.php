<!--
  IAT 352 with Prof. Helmine Serban
  D101 with Fatemeh Salehian-Kia
  Beak & Spur
  Bread-wy Woo
-->

<?php
// queries to access rows in database 
$font_types_result = $db_connection->query("SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='font_families' AND COLUMN_NAME='font_type'");
$font_xheights_result = $db_connection->query("SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='font_families' AND COLUMN_NAME='x_height'");


?>