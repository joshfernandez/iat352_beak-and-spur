<?php



$fam_id = $family_id_display; 
// echo $fam_id;


$individual_fonts = $db_connection->query("SELECT * FROM individual_fonts INNER JOIN font_families ON individual_fonts.family_id=font_families.family_id WHERE individual_fonts.family_id = '$fam_id' LIMIT 1 ");

// $family_name = assoc_fetcher($fontname, 'family_name');
$family_name ="";
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
        font-weight: " . $font_weight. ";
        font-style: ". $font_style.";
 

        font-family: '" . $family_name . "';
        src: url('" . $folder_path . ".otf') format('opentype'),
        url('" . $folder_path . ".woff') format('woff');  
    }";
}
echo "
</style>
";


?>