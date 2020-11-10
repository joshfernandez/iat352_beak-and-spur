<!--
  IAT 352 with Prof. Helmine Serban
  D101 with Fatemeh Salehian-Kia
  Beak & Spur
  Bread-wy Woo

  db-connection-methods.php
-->

<?php

function openDBConnection() {

  // 2 - Create a database connection.

  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "josh_fernandez";

  $db_connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  if(mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error . " (" . mysqli_connect_errno . ")");
  }

  return $db_connection;

}

function closeDBConnection($db_connection) {

  // 6 - Close the database connection.
  mysqli_close($db_connection);

}

?>
