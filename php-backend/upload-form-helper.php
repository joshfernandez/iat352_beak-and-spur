<!--
  IAT 352 with Prof. Helmine Serban
  D101 with Fatemeh Salehian-Kia
  Beak & Spur
  Bread-wy Woo


-->

<?php
include "helpers/db-connection-methods.php";
include "helpers/query-append-methods.php";
include "helpers/query-perform-methods.php";
include "helpers/form-analysis-methods.php";
$db_connection = openDBConnection();


$setCleaner = function ($postArr) {
    // while ($postArr = mysqli_fetch_assoc($result)) {
    $string = "";
    $string .= serialize($postArr);
    $string = substr($string, 35);
    $string = rtrim($string, ')";}');
    $attributes = explode(",", $string);
    $looper = $attributes;
    return $looper;
};
// SELECT SUBSTRING(COLUMN_TYPE,)
// FROM information_schema.COLUMNS
// WHERE TABLE_SCHEMA='databasename' 
//     AND TABLE_NAME='tablename'
//     AND COLUMN_NAME='columnname'

$checkboxes = function ($val, $postArr) {

    echo '
 <span class="checkbox-holder">
            <input 
            type="checkbox"  id="' . $val . '"             name="' . $postArr . '[' . $val . ']"         
            value="' . $val . '"            >
            <label 
            for="' . $val . '"            >
             ' . $val . '
             </label>
            </span>
';
};

$radiobuttons = function ($val, $postArr) {

    echo '
        <div class="radiobutton-holder">
        <input 
        type="radio"  id="' . $val . '"             name="' . $postArr . '"         
        value="' . $val . '"            >
        <label 
        for="' . $val . '"            >
            ' . $val . '
            </label>
        </div> ';
};
function inputLooper($result, $cleanArr, $creator, $cleaner)
{

    while ($i = mysqli_fetch_assoc($result)) {
        $attributes = $cleaner($i);
        $ind = 0;

        foreach ($attributes as $attribute) {
            $ind += 1;
            $attribute = trim($attribute, "'");

            // $cleanArr = "attribute_filter";

            $creator($attribute, $cleanArr);
            //         echo '
            // <span class="checkbox-holder">
            // <input 
            // type="checkbox"  id="' . $attribute . '"             name="attribute_filter[' . $attribute . ']"         
            // value="' . $attribute . '"            >
            // <label 
            // for="' . $attribute . '"            >
            //  ' . $attribute . '
            //  </label>
            // </span>

            //  ';
        }
    };
}
?>