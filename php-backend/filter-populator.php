<!--
  IAT 352 with Prof. Helmine Serban
  D101 with Fatemeh Salehian-Kia
  Beak & Spur
  Bread-wy Woo

  font-family-page-query.php

-->

<?php
// Open a connection to the josh_fenandez database.
if(!isset($db_connection)){

 include "helpers/db-connection-methods.php";
 include "helpers/query-append-methods.php";
 include "helpers/query-perform-methods.php";
 $db_connection = openDBConnection();
} 

// <-------- QUERY CODE -------->
// 3 - queries to access rows in the database    
$f_query = "SELECT * FROM font_families INNER JOIN members ON font_families.username = members.username";

if (isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST") {

    // searchbar functionality
    if (!empty($_POST['searchbar_f'])) {

        // $searchbar_s is the variable i'm using for AJAX
        $searchbar_s = $_POST['searchbar_f'];
        $f_query .= " WHERE family_name LIKE '%" . $searchbar_s . "%'";
        // echo "<p>" .$row['searchbar_f']. "</p>";

    }

    // I feel like this logic is incorrect
    // font_type_filter is 
    if (!empty($_POST['font_type_filter']) && $_POST['searchbar_f'] != "") {
        $f_query.= "AND ";
        // echo "it works $f_query 2";

    }

    // 
    if (!empty($_POST['font_type_filter'])) {
        $primary = $_POST['font_type_filter'];
        $primary_s = implode(",", $_POST['font_type_filter']);

        $f_query .= " WHERE FIND_IN_SET('$primary_s',font_type)>0 ";

    }
    if (!empty($_POST['x_height_filter']) && !empty($_POST['font_type_filter'])) {
        $f_query .= "AND ";

    }

    if (!empty($_POST['x_height_filter'])) {
        $secondary = $_POST['x_height_filter'];
        foreach ($secondary as $height) {

        $f_query .= " WHERE x_height = '$height' OR";

        }

        $f_query = rtrim($f_query, ' OR ');
    }
}
    // returns correct query based on user input
    $font_list = $db_connection->query($f_query);
    
?>