<?php
error_reporting(E_ALL^E_DEPRECATED);
ini_set('display_errors', 1);

ob_start();
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'todo');
define('DB_PASSWORD', 'todo');
define('DB_DATABASE', 'todo');
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());
?>
