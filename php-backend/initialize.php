

<?php  

define("PRIVATE_PATH", dirname(__FILE__));
// echo  PRIVATE_PATH ;

define("BUILD_PATH", dirname(PRIVATE_PATH));
define("PROJECT_PATH", dirname(BUILD_PATH));

define("USER_FONTS_PATH", PROJECT_PATH . '/user-fonts');
// echo  USER_FONTS_PATH;
// define("SHARED_PATH", PRIVATE_PATH . '/shared');

// $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
// $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
// define("WWW_ROOT", $doc_root);


?>