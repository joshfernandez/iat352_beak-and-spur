<?php
if (!isset($db_connection)) {
    include "helpers/db-connection-methods.php";
    include "helpers/query-append-methods.php";
    include "helpers/query-perform-methods.php";

    // 2 - Open a connection to the josh_fenandez database.
    $db_connection = openDBConnection();
}


// initialize session
if (session_id() == '') {
    session_start();
}

// create session variable if form has been submitted
if (isset($_SESSION['logged_user'])) {    
    $logged_user = $_SESSION['logged_user'];
}

// if the user is logged in
if (isset($logged_user)) {
    // echo "$db_connection"; /
    // 3A - Write Query and store in variables
    $profile_img_result = $db_connection->query("SELECT profile_img FROM members WHERE username='$logged_user'");
    while ($profile_img_arr = mysqli_fetch_assoc($profile_img_result)) {
        $profile_img = $profile_img_arr["profile_img"];
        // $designerimg = $profile_img_arr["profile_img"];
    }
}
?>

<?php
if (isset($logged_user)) {
    include 'member-header.php';
} else {
    include "visitor-header.php";    
}

?>