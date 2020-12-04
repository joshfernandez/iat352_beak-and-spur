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
$font_lang_result = $db_connection->query("SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='font_families' AND COLUMN_NAME='languages'");

$font_asc_result = $db_connection->query("SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='font_families' AND COLUMN_NAME='ascender'");

$desc_result = $db_connection->query("SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='font_families' AND COLUMN_NAME='descender'");

$weight_result = $db_connection->query("SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='individual_fonts' AND COLUMN_NAME='weights'");

$italics_result = $db_connection->query("SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='individual_fonts' AND COLUMN_NAME='italics'");

// $font_asc_result = $db_connection->query("SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='font_families' AND COLUMN_NAME='ascender'");

// SELECT SUBSTRING(COLUMN_TYPE,)
// FROM information_schema.COLUMNS
// WHERE TABLE_SCHEMA='databasename' 
//     AND TABLE_NAME='tablename'
//     AND COLUMN_NAME='columnname'

?>