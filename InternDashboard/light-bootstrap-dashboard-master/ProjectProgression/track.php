<!-- Source: http://www.webslesson.info/2016/09/php-ajax-display-dynamic-mysql-data-in-bootstrap-modal.html --> 
<?php  
session_start();
 if(isset($_POST["Intern_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "conorhorgan95", "","intern_portal"); 
      $query = "SELECT pa.`Name`, pa.`CompletedOn` , pa.`LastUpdate` , pa.`Completed` , pa.`ProjectEndDate` , pa.`Description` ,  a.`projname` , a.`startdate` , ap.`name` AS InternName, a.`enddate` , GROUP_CONCAT( DISTINCT a.InternsSelected
                SEPARATOR  ', ' ) AS InternsSelected, GROUP_CONCAT( DISTINCT pa.InternID
                SEPARATOR  ', ' ) AS InternsSelectedID
                FROM  `ProjectProgress` pa
                JOIN  `project-registration` a ON a.`id` = pa.`ProjectID` 
                JOIN  `intern` ap ON ap.`id` = pa.`InternID` 
                WHERE pa.`id`='".$_POST["Intern_id"]."'";

      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-title">
                        <h3>Data Table</h3>
                        </div>
                        <table class="table-fill">
                        <thead>';  
           $i = 1;
      while($row = mysqli_fetch_array($result))  
      {  
         ${"InternName$i"} = $row['InternName'];  
          ${"ProjectID$i"} = $row['ProjectID'];
          ${"ProjectID$i"} = $row['ProjectID'];
             ${"ProjectID$i"} = $row['ProjectID'];
                                                                                 ${"id$i"} = $row['id'];
                                                                                                    ${"variable$i"} = $row['Name'];
                                                                                                    $COUNT = $row['COUNT'];
                                                                                                    $desc = $row["Description"];
                                                                                                    echo('dd');
                                                                                                    
                                                                                                    $st = $row['Completed'];
                                                                                                    $i = 1 + $i;
                                                                                                   if($st == 'yes'){
                                                                                                        $ps = 'Completed';
                                                                                                        $sd = 'Completed On';
                                                                                                        $ds = $row['CompletedOn'];
                                                                                                    }
                                                                                                    elseif($st == 'in progress'){
                                                                                                        $ps = 'In Progress';
                                                                                                        $sd = 'Projected End Date';
                                                                                                        $ds = $row['ProjectedEndDate'];
                                                                                                        $rs = '';
                                                                                                    }
                                                                                                    else{
                                                                                                        $ps = 'Not Completed';
                                                                                                        $sd = 'Projected End Date';
                                                                                                        $ds = $row['ProjectedEndDate'];
                                                                                                        $rs = '';
                                                                                                    }
       
           $output .= ' <p>'.$row["Name"].'</p>
                        <tr>
                        <th class="text-left">Type</th>
                        <th class="text-left">Details</th>
                        </tr>
                        </thead>
                        <tbody class="table-hover">
                        <tr>
                        <td class="text-left">Name</td>
                        <td class="text-left">'.$row["Name"].'</td>
                        </tr>
                        <tr>
                        <td class="text-left">Intern Responsible</td>
                        <td class="text-left">'.$row["InternsSelected"].'</td>
                        </tr>
                        <tr>
                        <td class="text-left">Description</td>
                        <td class="text-left">'.$row["Description"].'</td>
                        </tr>
                        <tr>
                        <td class="text-left">Status</td>
                        <td class="text-left">'.$ps.'</td>
                        </tr>
                        <tr>
                        <td class="text-left">'.$sd.'</td>
                        <td class="text-left">'.$ds.'</td>
                        </tr>
                         <tr>
                        <td class="text-left" '.$rs.'>Last Update Status</td>
                        <td class="text-left" '.$rs.'>'.$row["LastUpdate"].'</td>
                        </tr>
                        <tr>
                        <td class="text-left">File Attached</td>
                        <td class="text-left">'.$row["startdate"].'</td>
                        </tr>
                       
                ';  
      }  
      $output .= " </tbody></table></div>";  
      echo $output;  
 }  
 
 ?>