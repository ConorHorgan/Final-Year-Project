<!-- Source: http://www.webslesson.info/2016/09/php-ajax-display-dynamic-mysql-data-in-bootstrap-modal.html --> 
<?php  
session_start();
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "conorhorgan95", "","intern_portal"); 
      $query = "SELECT * FROM `project-registration` WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
       //Assigning the project id variable to a session variable
       $_SESSION['varname'] = $_POST["employee_id"];
           $output .= ' 
           
                <tr>  
                     <td width="30%"><label>Project Name</label></td>  
                     <td width="70%">'.$row["projname"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Subject Matter Expert Name</label></td>  
                     <td width="70%">'.$row["smename"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Subject Matter Expert Email</label></td>  
                     <td width="70%">'.$row["smeemail"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Office Location</label></td>  
                     <td width="70%">'.$row["location"].'</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Start Date</label></td>  
                     <td width="70%">'.$row["startdate"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>End Date</label></td>  
                     <td width="70%">'.$row["enddate"].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Number of Interns Needed</label></td>  
                     <td width="70%">'.$row["internsneeded"].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Estimated Hours Per Intern</label></td>  
                     <td width="70%">'.$row["estimatehours"].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Skills Required</label></td>  
                     <td width="70%">'.$row["skill"].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Project Description</label></td>  
                     <td width="70%">'.$row["projdesc"].' Year</td>  
                </tr>  
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 
 ?>