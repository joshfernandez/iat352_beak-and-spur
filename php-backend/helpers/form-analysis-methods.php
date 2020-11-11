<!--
  IAT 352 with Prof. Helmine Serban
  D101 with Fatemeh Salehian-Kia
  Beak & Spur
  Bread-wy Woo

  form-analysis-methods.php
-->

<?php

function isFormSubmitted($submit_field) {
  return isset($submit_field) && !empty($submit_field);
}

function initializeField($form_field) {

  if (!empty($form_field)) {

    // Source: Helmine's world_db_samplecode
    $final_value = trim($form_field);
    if(!get_magic_quotes_gpc()){
  		$final_value = addslashes($final_value);
  	}

    return $final_value;

  }
  else {
    return "";
  }

}

?>
