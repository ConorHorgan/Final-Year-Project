<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
mysql_query("UPDATE `sme` set `SmeName` = '".$_POST["name"]."', `SMELastName` = '".$_POST["code"]."', `SmeEmail` = '".$_POST["category"]."', `SmePhone` = '".$_POST["price"]."' WHERE  `id`=".$_GET["id"]);
$result = $db_handle->runQuery("SELECT * FROM `sme` WHERE `id`='" . $_GET["id"] . "'");
?>
<td class="First Name"><?php echo $result[0]["SmeName"]; ?></td>
<td class="Last Name"><?php echo $result[0]["SMELastName"]; ?></td>
<td class="Email"><?php echo $result[0]["SmeEmail"]; ?></td>
<td class="Phone Number"><?php echo $result[0]["SmePhone"]; ?></td>
<td class="action">
<a class="btnEditAction" onClick="showEdit(<?php echo $_GET["id"]; ?>)">Edit</a> <a class="btnDeleteAction" onClick="del(<?php echo $_GET["id"]; ?>)">Delete</a>
</td>