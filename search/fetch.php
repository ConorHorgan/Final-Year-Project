<?php  
 //fetch.php  
 $connect = mysqli_connect("localhost", "intern_portal", "conorhorgan95", "pass");  
 if(isset($_POST["employee_id"]))  
 {  
      $query = "SELECT * FROM `project-registration` WHERE id = '4'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>