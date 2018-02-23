<?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "conorhorgan95","","intern_portal"); 
      $query = "SELECT * FROM project-registration WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["projname"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Address</label></td>  
                     <td width="70%">'.$row["smename"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Gender</label></td>  
                     <td width="70%">'.$row["location"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Designation</label></td>  
                     <td width="70%">'.$row["startdate"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Age</label></td>  
                     <td width="70%">'.$row["enddate"].' Year</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Age</label></td>  
                     <td width="70%">'.$row["internsneeded"].' Year</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Age</label></td>  
                     <td width="70%">'.$row["estimatehours"].' Year</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Age</label></td>  
                     <td width="70%">'.$row["skill"].' Year</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Age</label></td>  
                     <td width="70%">'.$row["projdesc"].' Year</td>  
                </tr>  
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>