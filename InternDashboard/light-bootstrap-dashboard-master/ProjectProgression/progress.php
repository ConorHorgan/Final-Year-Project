<?php
session_start();
$_POST["employee_id"] = '4';
     if(isset($_POST["employee_id"])) 
     {
         $host = 'localhost';
         $databaseUsername = 'conorhorgan95';
         $databasePassword = '';
         $database= 'intern_portal';
         $connection = new mysqli($host, $databaseUsername, $databasePassword, $database);

if ($connection->connect_errno > 0) {
    die ('Unable to connect to database [' . $connection->connect_error . ']');
}

$sql = "SELECT * FROM `ProjectProgress`
WHERE `ProjectID`='".$_POST["employee_id"]."'";



           //, COUNT(*) WHERE `InternID`='".$_POST["employee_id"]."' AS 'COUNT'

if (!$result = $connection->query($sql)) {
    die ('There was an error running query[' . $connection->error . ']');
}

echo '<select class = "toolbarDropdown" id = "toolbarDropdown-MultipleAccounts">';

   

echo '</select>';
     }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/InternDashboard/light-bootstrap-dashboard-master/ProjectProgression/assets/progress.css">
        <link rel="stylesheet" href="/InternDashboard/light-bootstrap-dashboard-master/ProjectProgression/assets/table.css">
        <script type="text/javascript" src="/InternDashboard/light-bootstrap-dashboard-master/ProjectProgression/assets/progress.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
        <body>
            
            <container>
            <!-- populate table from mysql database -->
                                                                        <?php 
                                                                        $i = 1;
                                                                         while ($row = $result->fetch_array()) {
                                                                                 ${"ProjectID$i"} = $row['ProjectID'];    
                                                                                 $InternsSelected = $row['InternsSelected'];
                                                                                 $projname = $row['projname'];
                                                                                 $enddate = $row['enddate'];
                                                                                 $startdate = $row['startdate'];
                                                                                 ${"InternName$i"} = $row['InternName'];  
                                                                                 ${"ProjectID$i"} = $row['ProjectID'];
                                                                                 ${"ProjectID$i"} = $row['ProjectID'];
                                                                                 ${"ProjectID$i"} = $row['ProjectID'];
                                                                                 ${"id$i"} = $row['id'];
                                                                                                    ${"variable$i"} = $row['Name'];
                                                                                                    $COUNT = $row['COUNT'];
                                                                                                   
                                                                                                 ${"status$i"} = $row['Completed'];  
                                                                                                 if( $row['Completed'] == 'yes'){
                                                                                                     ${"completed$i"} = 'done';
                                                                                                 }
                                                                                                 elseif ($row['Completed'] == 'in progress') {
                                                                                                     ${"completed$i"} = 'active';
                                                                                                 }
                                                                                                 elseif ($row['Completed'] == ''){
                                                                                                     ${"completed$i"} = '';
                                                                                                 }
                                                                                                    $i = 1 + $i;
                                                                         }
                                                                        ?>
            <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
         <div class="progress">
          <!-- <div id="userdiv" name="<?php echo($id1);?>">
               <p>ggdgfdgfd</p>
               </div>-->
               
            <?php 
            
            $COUNT = 4;
            if($COUNT >=1)
            {
                echo('<div id="userdiv" class="circle '.$completed1.'"  name="'.$id1.'" >
                <span class="label">1</span>
                <span class="title">'.$variable1.'</span>
              </div>');
            }
            if($COUNT >=2){
                 echo('<span class="bar done"></span>
              <div id="userrdiv" class="circle '.$completed2.'"  name="'.$id2.'" >
                <span class="label">2</span>
               <p class="title">'.$variable2.'</p>
              </div>');
            }
            if($COUNT >=3){
                 echo('<span class="bar done"></span>
               <div id="userrrdiv" class="circle '.$completed3.'"  name="'.$id3.'" >
                <span  class="label">3</span>
                <p class="title">'.$variable3.'</p>
              </div>');
            }
            if($COUNT >=4){
                 echo('<span class="bar half"></span>
                <div id="userrrrdiv" class="circle '.$completed4.'"  name="'.$id4.'" >
                <span class="label">4</span>
                <p class="title">'.$variable4.'</p>
              </div>');
            }
            if($COUNT >=5){
                 echo('<span class="bar done"></span>
                <div id="userrrrrdiv" class="circle '.$completed5.'"  name="'.$id5.'" >
                <span class="label">5</span>
                <p class="title">'.$variable5.'</p>
              </div>');
            }?>
           <br><br><br>
           </container>
            <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Task Details</h4>  
                </div>  
                 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                     <!--<input type="button" typename="view" value="Apply"  class="btn btn-info btn-xs apply" />-->
                     
                      <input type="submit" name="apply" style="background-color: #269abc; color: #fff;" value="apply" class="rounded apply-data"> <br><br>
                      </form>
                </div>  
           </div>  
      </div>  
  
             
             <!--   
            <div id="GSCCModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="table-title">
<h3>Data Table</h3>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Type</th>
<th class="text-left">Details</th>
</tr>
</thead>
<tbody class="table-hover">
<tr>
<td class="text-left">Name</td>
<td class="text-left"><?php echo($variable1)?></td>
</tr>
<tr>
<td class="text-left">Intern Responsible</td>
<td class="text-left"><?php echo($InternID1)?></td>
</tr>
<tr>
<td class="text-left">Description</td>
<td class="text-left"><?php echo($variable1)?></td>
</tr>
<tr>
<td class="text-left">Status</td>
<td class="text-left"><?php echo($variable1)?></td>
</tr>
<tr>
<td class="text-left">File Attached</td>
<td class="text-left"><?php echo($variable1)?></td>
</tr>
</tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>-->
        </body>
         
  
        <script type="text/javascript" src="">
        /* global $ */
        var $modal = $('.modal').modal({
  show: false 
});
             $('#userdiv').on('click', function() {
  $modal.modal('show');
});

        </script>
      
        <script>
/* global $ */
      $('#userdiv').on('click', function() {
           var Intern_id = $(this).attr("name");
           if(Intern_id != '')  
           {  
                $.ajax({  
                     url:"track.php",  
                     method:"POST",  
                     data:{Intern_id:Intern_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      }); 
</script>
<script>
/* global $ */
      $('#userrdiv').on('click', function() {
           var Intern_id = $(this).attr("name");
           if(Intern_id != '')  
           {  
                $.ajax({  
                     url:"track.php",  
                     method:"POST",  
                     data:{Intern_id:Intern_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      }); 
</script>
<script>
/* global $ */
      $('#userrrdiv').on('click', function() {
           var Intern_id = $(this).attr("name");
           if(Intern_id != '')  
           {  
                $.ajax({  
                     url:"track.php",  
                     method:"POST",  
                     data:{Intern_id:Intern_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      }); 
</script>
<script>
/* global $ */
      $('#userrrrdiv').on('click', function() {
           var Intern_id = $(this).attr("name");
           if(Intern_id != '')  
           {  
                $.ajax({  
                     url:"track.php",  
                     method:"POST",  
                     data:{Intern_id:Intern_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      }); 
</script>
<script>
/* global $ */
      $('#userrrrdiv').on('click', function() {
           var Intern_id = $(this).attr("name");
           if(Intern_id != '')  
           {  
                $.ajax({  
                     url:"track.php",  
                     method:"POST",  
                     data:{Intern_id:Intern_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      }); 
</script>
<script>
/* global $ */
      $('#userrrrrdiv').on('click', function() {
           var Intern_id = $(this).attr("name");
           if(Intern_id != '')  
           {  
                $.ajax({  
                     url:"track.php",  
                     method:"POST",  
                     data:{Intern_id:Intern_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      }); 
</script>
        <script>
/* global $ */
 /* global data */
     
          function doSomething(id){
               var $modal = $('.modal').modal({show: false 
});
   
    $.post("track.php", {id: id});

                          $('#employee_detail').html(data);  
                          $modal.modal('show');  
                          return false;
                     }  
                       
      
</script>
        <script type="text/javascript">
         /* global $ */
function doSomething(id){
    $.post("track.php", {id: id});
return false;
}
</script>
</html>