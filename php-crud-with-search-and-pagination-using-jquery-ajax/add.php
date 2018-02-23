<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$result = mysql_query("INSERT INTO `sme`(`SmeName`, `SMELastName`, `SmeEmail`, `SmeEmail`) VALUES('".$_POST["name"]."','".$_POST["code"]."','".$_POST["category"]."','".$_POST["price"]."')");
?>