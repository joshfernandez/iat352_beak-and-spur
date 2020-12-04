<?php



$fam_id = $row["family_id"];
// echo $fam_id;

// $font_username = $db_connection->query("SELECT font_families.username FROM font_families INNER JOIN members ON font_families.username=members.username WHERE family_id = '$familyId'");

// $font_username = $db_connection->query("SELECT font_families.username FROM font_families INNER JOIN members ON font_families.username=members.username WHERE family_id = '$fam_id'");



// $counter = 0;

// $font_count = $db_connection->query("SELECT COUNT(font_id) FROM individual_fonts INNER JOIN font_families ON individual_fonts.family_id=font_families.family_id WHERE individual_fonts.family_id = '$fam_id'");

// while ($row = $font_count->fetch_row()) {
//     // $row = mysql_fetch_row($result); 
//     $counter = $row[0];
// }

$individual_fonts = $db_connection->query("SELECT * FROM individual_fonts INNER JOIN font_families ON individual_fonts.family_id=font_families.family_id WHERE individual_fonts.family_id = '$fam_id' ");
// $family_name = assoc_fetcher($fontname, 'family_name');
$family_name = "";
$font_css_name = "";
echo "<style> ";
while ($record_arr = mysqli_fetch_assoc($individual_fonts)) {
    // USER_FONTS_PATH = str_replace('\','')
    // foreach ($record_arr as $key => $value) {
    //     # code...
    // }
    // echo $record_arr;   
    $font_owner = $record_arr['username'];
    $family_name = $record_arr['family_name'];
    $fontfamily_name = strtolower($family_name);

    $fontfamily_name = str_replace(' ', '', $fontfamily_name);

    $font_css_name = $record_arr['css_name'];
    $folder_path = '../../../iat352_beak-and-spur/user-fonts/' . $font_owner . '/' . $fontfamily_name . $fam_id . '/' . $font_css_name;
    // echo $folder_path;
    // $weight  = assoc_fetcher($individual_fonts, 'family_name');
    // echo dirname($_SERVER['SCRIPT_NAME']); fd
    // echo dirname(__DIR__, "4")
    // echo "                url('" . $folder_path . ".woff') format('woff'),
    // ";
    $font_weight = $record_arr['weights'];
    $font_style = $record_arr['italics'];

    echo "
    @font-face { 
        font-weight: " . $font_weight . ";
        font-style: " . $font_style . ";
  

        font-family: '" . $family_name . "';
        src: url('" . $folder_path . ".otf') format('opentype'),
        url('" . $folder_path . ".ttf') format('ttf'), 
        url('" . $folder_path . ".woff') format('woff');  
    }";
}
echo "
</style>
";
