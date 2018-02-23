<?php  
 $connect = mysqli_connect("localhost", "conorhorgan95", "", "intern_portal");  
  $sql = " UPDATE project-registration SET InternsSelected= '1' WHERE id = '".$_POST["employee_id"]."'";
   
   if (mysqli_query($conn, $sql)) {
      echo "Record updated successfully";
   } else {
      echo "Error updating record: " . mysqli_error($conn);
   }
   mysqli_close($conn);
?>

