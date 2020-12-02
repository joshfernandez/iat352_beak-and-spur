<?php
// Open a connection to the josh_fenandez database.
if(!isset($db_connection)){
 include "helpers/db-connection-methods.php";
 include "helpers/query-append-methods.php";
 include "helpers/query-perform-methods.php";
 $db_connection = openDBConnection();
} 

// <-------- QUERY CODE -------->
$f_query = "SELECT * FROM font_families INNER JOIN members ON font_families.username = members.username";



//searchbar + primary filter
// if(isset($_POST['searchbar_f']) != "" && ){
//     $n = "three";
//     // $_SESSION['searchbar_session'] = htmlentities($_POST['searchbar_f']);
// } 

//primary filter + searchbar

$n = "zero";

// searchbar + filter 
if(isset($_POST['searchbar_f']) && isset($_POST['font_type_filter']) != ""){

    $_SESSION['searchbar_session'] = htmlentities($_POST['searchbar_f']);
    
    $searchbar_s = $_POST['searchbar_f'];
    $primary = $_POST['font_type_filter'];
    $n = "one";
}

// filter + searchbar

// searchbar
if(isset($_POST['searchbar_f']) != ""){
    $searchbar_s = $_POST['searchbar_f'];
    $n = "three";
} 

// primary filter
if (isset($_POST['font_type_filter']) != "") {
    $primary = $_POST['font_type_filter'];
    $n = "four";
    // $primary = $_POST['font_type_filter'];
} 

// ADD and statement
// if (!empty($_SESSION['searchbar_session'])) {
//     $f_query.= "AND ";
//     echo "$f_query";
//     // echo "it works query 2";
// }

// variable for the switch statement
switch ($n){
    case "one":
        // Searchbar + Primary Filter
        $f_query .= " WHERE family_name LIKE '%" . $searchbar_s . "%'";
        $f_query.= "AND ";
        $f_query .= " WHERE FIND_IN_SET('$primary',font_type)>0 ";
        echo "ONE!";
    break;

    case "two":
        // Primary Filter + Searchbar

        $f_query.= "AND ";
        
    echo "TWO!";

    break;

    case "three": // Searchbar
        // write to query
         $f_query .= " WHERE family_name LIKE '%" . $searchbar_s . "%'";
    echo "THREE!";
    break;

    case "four": // Primary Filter
        // write to query
        $f_query .= " WHERE FIND_IN_SET('$primary',font_type)>0 ";
    echo "FOUR!";
    break;
    
}

    // // checks that font_type_filter is assigned & not empty
    // if (isset($_POST['font_type_filter']) && !empty($_POST['font_type_filter'])) {
    //     $primary = $_POST['font_type_filter'];
    //     // write to query
    //     $f_query .= " WHERE FIND_IN_SET('$primary',font_type)>0 ";
    //     echo "it works query 3";
    //     $primaryFilter = true;
    // } else {
    //     $primaryFilter = false;
    // }
    
    // if (!empty($_POST['x_height_filter']) && !empty($_POST['font_type_filter'])) {
    //     $f_query .= "AND ";

    // }

    // if (!empty($_POST['x_height_filter'])) {
    //     $secondary = $_POST['x_height_filter'];
    //     foreach ($secondary as $height) {

    //     $f_query .= " WHERE x_height = '$height' OR";

    //     }

    //     $f_query = rtrim($f_query, ' OR ');
    // }

    echo "$f_query";
    // returns correct query based on user input
    $font_list = $db_connection->query($f_query);
    
?>