<?php 

define('BASE_PATH', dirname(dirname(__FILE__)));
define('APP_FOLDER','simpleadmin');


require_once BASE_PATH.'/lib/MysqliDb.php';
$servername = "localhost";
$username = "conorhorgan95";
$password = "";
$dbname = "intern_portal";
// create connection object

$db =new MysqliDb($servername,$username,$password,$dbname);