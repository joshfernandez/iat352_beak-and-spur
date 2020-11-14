<?php
// initialize session
session_start();
// $logged_in;
// $logged_in = False;

// create session variable if form has been submitted
if (isset($_SESSION['logged_user'])) {

    $logged_user = $_SESSION['logged_user'];
}
// echo "<h1> $logged_user</h1>";

if (isset($logged_user)) {

    // $logged_user = $_SESSION['logged_user'];


    include "helpers/db-connection-methods.php";
    include "helpers/query-append-methods.php";
    include "helpers/query-perform-methods.php";

    // 2 - Open a connection to the josh_fenandez database.
    $db_connection = openDBConnection();

    // 3A - Write Query and store in variables

    // PRINT VALUES DYAMICALLY BASED ON WHAT THE USER CLICKS
    //   $fontBlockid = return id from font block
    // $p_query="SELECT profile_img FROM members WHERE username==".$logged_user;

    $profile_img_result = $db_connection->query("SELECT profile_img FROM members WHERE username='$logged_user'");

    // $profile_img_result = mysqli_query($db_connection, $p_query);

    while($profile_img_arr=mysqli_fetch_assoc($profile_img_result)) {
        $profile_img = $profile_img_arr["profile_img"];
        // echo '<img src="data:image/jpeg;base64,' . base64_encode($designerShowImage) . '" alt="no" class="contributor-img-size"/>';
    }
    // $designerimg = $db_connection->query("SELECT profile_img FROM members WHERE username = 'eathnma'");
    // while ($imagerow = mysqli_fetch_assoc($designerimg)) {
    //     $designerShowImage = $imagerow["profile_img"];
    //     echo '<img src="data:image/jpeg;base64,' . base64_encode($designerShowImage) . '" alt="no" class="contributor-img-size"/>';
    // }
}


// $profile_img = mysqli_fetch_assoc($profile_img_arr);


// while ($family_name = mysqli_fetch_assoc($fontname)) {
//     $fontName = $family_name['family_name'];
//     echo $fontName;
// }



// $fontname = $db_connection->query("SELECT family_name FROM font_families WHERE family_id = '1' ");


?>


<?php
if (isset($logged_user)) {

    // if ($logged_in == false) {
    include 'member-header.php';
} else {
    include "visitor-header.php";
}
// }
// echo "<h1> blue</h1>";
// echo PRIVATE_PATH . "<p> provate</p><br>";

?>
<!-- php-backend\includes\visitor_header.php -->