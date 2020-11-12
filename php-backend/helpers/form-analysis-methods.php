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

function validateUsername($actual_username) {

  // Source: https://www.jotform.com/blog/php-regular-expressions/
  $username_pattern = "/^[\w\-\.]+$/i";
  if (!preg_match($username_pattern, $actual_username)) {
    echo "Your username is invalid. Please only include letters, numbers, underscores, dashes, or periods.";
    echo
    "<p>
        <a href=\"register.php\">Return to the register page</a>
    </p>";
    die();
  }

}

function validateEmail($actual_email) {

  // Source: https://codingcompiler.com/regular-expressions-web-developers/
  $email_pattern = "/^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i";
  if (!preg_match($email_pattern, $actual_email)) {
    echo "Your email address is invalid. Please provide a valid email address.";
    echo
    "<p>
        <a href=\"register.php\">Return to the register page</a>
    </p>";
    die();
  }

}

?>
