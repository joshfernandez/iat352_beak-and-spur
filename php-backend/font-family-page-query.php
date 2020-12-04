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

//values are retrieved from explore page
$familyId = $_GET['varname'] ?? '1';



// 3 - queries to access rows in the database    
$fontname = $db_connection->query("SELECT family_name FROM font_families WHERE family_id = '$familyId'");
$fontdesigner = $db_connection->query("SELECT display_name FROM font_families INNER JOIN members ON font_families.designer=members.username WHERE family_id = '$familyId'");
$fontlicence = $db_connection->query("SELECT licence FROM font_families WHERE family_id = '$familyId'");
$fontlanguages = $db_connection->query("SELECT languages FROM font_families WHERE family_id = '$familyId'");
$fonttype = $db_connection->query("SELECT font_type FROM font_families WHERE family_id = '$familyId'");

$font_username = $db_connection->query("SELECT font_families.username FROM font_families INNER JOIN members ON font_families.username=members.username WHERE family_id = '$familyId'");

$individual_fonts = $db_connection->query("SELECT * FROM individual_fonts WHERE family_id = '$familyId'");


// 4 - query to retrieve JPEG blobs 
$designerimg = $db_connection->query("SELECT members.profile_img FROM members INNER JOIN font_families ON members.username=font_families.designer WHERE family_id = '$familyId'");


function assoc_fetcher_echoer($arr, $field)
{
    while ($clean_arr = mysqli_fetch_assoc($arr)) {
        $var = $clean_arr[$field];
        echo $var;
    }
}
function assoc_fetcher($arr, $field)
{
    while ($clean_arr = mysqli_fetch_assoc($arr)) {
        $var = $clean_arr[$field];
        // echo $var;
    return $var;
    }
    
}
//   // 5 - query to retrieve TTF blobs
//   $fontfile = $db_connection -> query("SELECT font_file FROM individual_fonts WHERE family_id = '$familyId'");

?>