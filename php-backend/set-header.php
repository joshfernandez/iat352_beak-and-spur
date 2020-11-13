<?php
// initialize session
session_start();
// $logged_in;
$logged_in = False;

// create session variable if form has been submitted
if (isset($_SESSION['logged_user'])) {
 
    $logged_in = true;
}
?>
  

<?php
// if (isset($logged_in)) {

    // if ($logged_in == false) {
include "visitor-header.php";
    // }
//  else {
//         // include 'php-backend\includes\visitor-header.php';
//     }  
// }
echo "<h1> blue</h1>";
echo PRIVATE_PATH . "<p> provate</p><br>";

?>
<!-- php-backend\includes\visitor_header.php -->      