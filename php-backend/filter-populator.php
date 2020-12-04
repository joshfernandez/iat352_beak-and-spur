<?php
// // grabs JSON formatting from main.js
// $json = file_get_contents('php://input');
// $data = json_decode($json);

// // iterates through JSON & puts in associate array
// $jsonIterator = new RecursiveIteratorIterator(
//     new RecursiveArrayIterator(json_decode($json, TRUE)),
//     RecursiveIteratorIterator::SELF_FIRST);

// foreach ($jsonIterator as $key => $val) {
//     if(is_array($val)) {
//         // echo "$key:\n";
//         $_POST['font_type_filter'] = $val;
//     } else {
//         $_POST['searchbar_f'] = $val;
//         echo $_POST['searchbar_f'];
//         // echo "$key => $val\n";
//     }
// }

// Open a connection to the josh_fenandez database.
if(!isset($db_connection)){
 include "helpers/db-connection-methods.php";
 include "helpers/query-append-methods.php";
 include "helpers/query-perform-methods.php";
 $db_connection = openDBConnection();
} 

// <-------- QUERY CODE -------->
$f_query = "SELECT * FROM font_families INNER JOIN members ON font_families.username = members.username";

$message = "";

// searchbar
if(isset($_POST['searchbar_f']) && !empty($_POST['searchbar_f'])){

    // save to session variable
    $_SESSION['searchbar_session'] = htmlentities($_POST['searchbar_f']); 
    
    $searchbar_s = $_SESSION['searchbar_session'];
    // echo "$message = searchbar only";
    // echo "<br>$searchbar_s";

    if (isset($_POST['font_type_filter']) && !empty($_POST['font_type_filter']) ) {
        $primary = $_POST['font_type_filter'];
        // echo "$primary";
        $f_query .= " WHERE family_name LIKE '%" . $searchbar_s . "%'";
        $f_query .= "AND ";

         // turns the string into an array
        $primaryValues = explode(",", $primary);
        $numPrimaryValues = count($primaryValues);
        // echo "$numPrimaryValues;";
        $count = 0;

    foreach ($primaryValues as $item){
        $count++;
        // check for first use case
        if($count != 1){
            $f_query .= "AND ";
            $f_query .= " FIND_IN_SET('$item',font_type)";
        } else {
            $f_query .= " FIND_IN_SET('$item',font_type)";
        }

        // echo "$primary";
    }
} else {
    $f_query .= " WHERE family_name LIKE '%" . $searchbar_s . "%'";
}
    // echo "$searchbar_s";
    
} else if (isset($_POST['font_type_filter']) && !empty($_POST['font_type_filter'])){

    $primary = $_POST['font_type_filter'];
    
    // turns the string into an array
    $primaryValues = explode(",", $primary);
    $numPrimaryValues = count($primaryValues);
    // print
    // echo "$numPrimaryValues;";
    $count = 0;

    foreach ($primaryValues as $item){
        // echo "This:$item <br>";
        // check for first use case
        $count++;
        // check for first use case
        if($count != 1){
            $f_query .= "AND ";
            $f_query .= " FIND_IN_SET('$item',font_type)";
        } else {
            $f_query .= " WHERE FIND_IN_SET('$item',font_type)";
        }
    }
}
    // returns correct query based on user input
    $font_list = $db_connection->query($f_query);
    
    // encode the query into JSON format
    json_encode($font_list);

// method for echoing query results
function assoc_fetcher_echoer($arr, $field){
    while ($clean_arr = mysqli_fetch_assoc($arr)) {
        $var = $clean_arr[$field];
        echo $var;
    }
}

// method for returning cleaned query results

function assoc_fetcher($arr, $field){
    while ($clean_arr = mysqli_fetch_assoc($arr)) {
        $var = $clean_arr[$field];
        // echo $var;
        return $var;
    }
}

?>