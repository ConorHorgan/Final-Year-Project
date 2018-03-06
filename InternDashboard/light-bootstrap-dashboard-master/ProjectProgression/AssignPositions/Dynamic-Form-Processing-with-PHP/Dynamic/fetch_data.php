<?php
if(isset($_POST['get_option']))
{
   echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
 $host = 'localhost';
 $user = 'conorhorgan95';
 $pass = '';
 mysql_connect($host, $user, $pass);
 mysql_select_db('intern_portal');

 $state = $_POST['get_option'];
 $find=mysql_query("select LastName from intern where Location='$state'");
 while($row=mysql_fetch_array($find))
 {
  echo("<option>".$row['LastName']."</option>");
 }
 exit;
}
?>