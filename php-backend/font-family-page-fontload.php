<?php

$font_owner = assoc_fetcher($font_username, 'username');


$family_name = assoc_fetcher($fontname, 'family_name');
$fontfamily_name = strtolower($family_name);
$fontfamily_name = str_replace(' ', '', $fontfamily_name);

 echo "<style> ";
while ($record_arr = mysqli_fetch_assoc($individual_fonts)) {
    // USER_FONTS_PATH = str_replace('\','')
    foreach ($record_arr as $key => $value) {
        # code...
    }
    // echo $record_arr;   
    $font_css_name = $record_arr['css_name'];  
    $folder_path = '../../iat352_beak-and-spur/user-fonts/' . $font_owner . '/' . $fontfamily_name . $familyId . '/' . $font_css_name;
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
    input.typeable{
        font-family: '" . $family_name . "';
        
        }      
</style>
";
  
?>
      