<!--
  IAT 352 with Prof. Helmine Serban
  D101 with Fatemeh Salehian-Kia
  Beak & Spur
  Bread-wy Woo

  file-upload-methods.php
-->

<?php

function uploadImage($image_file) {

  // Initializing variables
  // Source: https://www.tutorialspoint.com/php/php_file_uploading.htm
  $file_name = $image_file['name'];
  $file_size = $image_file['size'];
  $file_tmp = $image_file['tmp_name'];
  $file_type = $image_file['type'];

  // Source: https://www.w3schools.com/php/php_file_upload.asp
  $target_dir = "C:\\xampp\\htdocs\\jafernan\\user-assets\\";
  $target_file = $target_dir . basename($file_name);
  $uploadOk = 1;
  $file_ext = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  echo "<p>" . $file_name . " " . $file_size . " " . $file_tmp . " " . $file_type . " " . $file_ext . "</p>";

  // Check if image file is a actual image or fake image
  if(isFormSubmitted($_POST["update-profile"])) {
    $check = getimagesize($file_tmp);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }

  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }

  // Check file size
  if ($file_size > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }

  // Allow certain file formats
  if($file_ext != "jpg" && $file_ext != "png" && $file_ext != "jpeg"
  && $file_ext != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {

    echo "<p>" . $file_tmp . " " . $target_file . "</p>";

    if (move_uploaded_file($file_tmp, $target_file)) {
      echo "The file ". htmlspecialchars( basename( $image_file["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

}

?>
