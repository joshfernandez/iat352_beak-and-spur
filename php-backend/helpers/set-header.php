<?php
// initialize session
session_start();
// $logged_in;
$logged_in = TRUE;

// create session variable if form has been submitted
if (isset($_SESSION['logged_user'])) { 

    $logged_in = true;
}
?>

<?php if ($logged_in == true) {
    include('php-backend/includes/member_header.php');
} else {
    include('php-backend/includes/visitor_header.php');
} ?>