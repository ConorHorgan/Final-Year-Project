<?php  
 //fetch.php  
 $connect = mysqli_connect("localhost","conorhorgan95", "", "intern_portal");  
 if(isset($_POST["id"]))  
 {  
      $output = array();  
      $procedure = "  
      CREATE PROCEDURE whereUser(IN user_id int(11))  
      BEGIN   
      SELECT * FROM intern WHERE id = user_id;  
      END;   
      ";  
      if(mysqli_query($connect, "DROP PROCEDURE IF EXISTS whereUser"))  
      {  
           if(mysqli_query($connect, $procedure))  
           {  
                $query = "CALL whereUser(".$_POST["id"].")";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     $output['Name'] = $row["Name"];  
                     $output['LastName'] = $row["LastName"];  
                }  
                echo json_encode($output);  
           }  
      }  
 }  
 ?>  