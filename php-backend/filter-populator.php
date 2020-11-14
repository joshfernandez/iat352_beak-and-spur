<!--
  IAT 352 with Prof. Helmine Serban
  D101 with Fatemeh Salehian-Kia
  Beak & Spur
  Bread-wy Woo

  font-family-page-query.php

-->

<?php


// 0 - Import helper methods and procedures.

// 2 - Open a connection to the josh_fenandez database.
if(!isset($db_connection)){

 include "helpers/db-connection-methods.php";
 include "helpers/query-append-methods.php";
 include "helpers/query-perform-methods.php";
 $db_connection = openDBConnection();
} 



// 3 - queries to access rows in the database    
$f_query = "SELECT * FROM font_families INNER JOIN members ON font_families.username = members.username";



if (isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST") {

    

    if (!empty($_POST['searchbar_f'])) {
        $searchbar_s = $_POST['searchbar_f'];

        $f_query .= " WHERE family_name LIKE '%" . $searchbar_s . "%'";
        // echo "it works $f_query 1 ";

    }

    if (!empty($_POST['font_type_filter']) && $_POST['searchbar_f'] != "") {
        $f_query.= "AND ";
        // echo "it works $f_query 2";

    }

    if (!empty($_POST['font_type_filter'])) {

        $primary = $_POST['font_type_filter'];
        $primary_s = implode(",", $_POST['font_type_filter']);
        // $another = explode(",", $primary_s);

        // $myset = "INSERT INTO myset (col) VALUES ('$primary_s')";
        $f_query .= " WHERE FIND_IN_SET('$primary_s',font_type)>0 ";




        // // $f_query .= "$primary_s";



        // foreach ($another as $height) {
        //     $f_query .= " AND WHERE font_type LIKE '%$height%'";

        //     # code...
        // }
        // $f_query = rtrim($f_query, 'AND ');

    }
    if (!empty($_POST['x_height_filter']) && !empty($_POST['font_type_filter'])) {
        $f_query .= "AND ";

        // echo "it works $f_query 4";

    }


    if (!empty($_POST['x_height_filter'])) {
        $secondary = $_POST['x_height_filter'];
        foreach ($secondary as $height) {

        $f_query .= " WHERE x_height = '$height' OR";

        }

        // $secondary_s = implode("", $_POST['x_height_filter']);
        // $another = explode(",",$secondary_s);
        // $f_query .= " WHERE x_height L '$secondary_s'";


        $f_query = rtrim($f_query, ' OR ');



    }
        // echo "$f_query";
}

$font_list = $db_connection->query($f_query);
// $search_res = mysqli_query($connection, $query);

// while ($font_list_arr = mysqli_fetch_assoc($font)) {
//     $fontName = $family_name['family_name'];
//     echo $fontName;
// }
// 4 - queries to retrieve JPEG blobs 
// $designerimg = $db_connection->query("SELECT profile_img FROM members WHERE username = 'eathnma'");



?>