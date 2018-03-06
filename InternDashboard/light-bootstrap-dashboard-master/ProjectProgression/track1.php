<!-- Source: http://www.webslesson.info/2016/09/php-ajax-display-dynamic-mysql-data-in-bootstrap-modal.html --> 
<?php  
session_start();
 if(isset($_POST["employee_id"]))  
 {  
     echo '<script language="javascript">';
echo 'alert('.$_POST["employee_id"].')';
echo '</script>';
      $output = '';  
      $connect = mysqli_connect("localhost", "conorhorgan95", "","intern_portal"); 
      $query = "SELECT pa.`Name` ,  a.`projname` , a.`startdate` , ap.`name` AS InternName, a.`enddate` , GROUP_CONCAT( DISTINCT a.InternsSelected
                SEPARATOR  ', ' ) AS InternsSelected, GROUP_CONCAT( DISTINCT pa.InternID
                SEPARATOR  ', ' ) AS InternsSelectedID
                FROM  `ProjectProgress` pa
                JOIN  `project-registration` a ON a.`id` = pa.`ProjectID` 
                JOIN  `intern` ap ON ap.`id` = pa.`InternID` 
               ";  
               // WHERE pa.`ProjectID`='".$_POST["employee_id"]."'
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
                     <td width="70%">'.$row["Name"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Subject Matter Expert Name</label></td>  
                     <td width="70%">'.$row["InternsSelected"].'</td>  
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