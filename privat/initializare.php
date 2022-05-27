<?php 

define("PRIVAT_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVAT_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');

$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root);

require_once('functii.php');
require_once('db_database.php');
require_once('query_functions.php');

$db = db_connect();

?>