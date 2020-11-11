<!--
  IAT 352 with Prof. Helmine Serban
  D101 with Fatemeh Salehian-Kia
  Beak & Spur
  Bread-wy Woo

  query-perform-methods.php
-->

<?php

function writeInsertQuery($db_connection, $table_name, $list_of_columns, $list_of_attributes) {

  $insert_query = "INSERT INTO " . $table_name .
                  " " . $list_of_columns .
                  " VALUES " . $list_of_attributes . ";";

  return performQuery($db_connection, $insert_query);

}

function writeSelectQuery($db_connection, $list_of_attributes, $list_of_tables, $list_of_conditions) {

  $select_query = "SELECT " . $list_of_attributes .
            " FROM " . $list_of_tables .
            " WHERE " . $list_of_conditions . ";";

  return performQuery($db_connection, $select_query);

}

function performQuery($db_connection, $query) {

  $result = mysqli_query($db_connection, $query);

  if(!$result) {
    die("Database query failed.");
  }

  return $result;

}

?>