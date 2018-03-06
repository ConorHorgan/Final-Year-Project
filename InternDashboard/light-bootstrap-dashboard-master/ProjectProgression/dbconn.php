</p>
<?php
$mysql_db_hostname = "localhost";
$mysql_db_user = "conorhorgan95";
$mysql_db_password = "";
$mysql_db_database = "intern_portal";

$connection = mysql_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password) or die("Could not connect database");
mysql_select_db($mysql_db_database, $connection) or die("Could not select database");
?>