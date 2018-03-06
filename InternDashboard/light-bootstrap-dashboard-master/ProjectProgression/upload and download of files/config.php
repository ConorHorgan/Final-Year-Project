<?php
$mysql_hostname = "localhost";  //your mysql host name
$mysql_user = "conorhorgan95";			//your mysql user name
$mysql_password = "";			//your mysql password
$mysql_database = "intern_portal";	//your mysql database

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Error on database connection");











