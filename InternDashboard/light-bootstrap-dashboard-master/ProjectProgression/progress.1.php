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
<?php
        if(!empty($_POST['apply'])){
            $qconnect = mysqli_connect("localhost", "conorhorgan95", "","intern_portal"); 
            	$qsl = " SELECT pa.`Name`, pa.`CompletedOn` , pa.`ProjectEndDate` , pa.`Completed`, pa.`LastUpdate` , pa.`Description` ,  a.`projname` , a.`startdate` , ap.`name` AS InternName, a.`enddate` , GROUP_CONCAT( DISTINCT a.InternsSelected
                SEPARATOR  ', ' ) AS InternsSelected, GROUP_CONCAT( DISTINCT pa.InternID
                SEPARATOR  ', ' ) AS InternsSelectedID
                FROM  `ProjectProgress` pa
                JOIN  `project-registration` a ON a.`id` = pa.`ProjectID` 
                JOIN  `intern` ap ON ap.`id` = pa.`InternID` 
                WHERE pa.`id`='".$_POST["Intern_id"]."'";
                      $qresult = mysqli_query($qconnect, $qsl);  
     
      while($row = mysqli_fetch_array($qresult))  
      {  
            $upname = $row["Name"];
            
            $updesc= $row["Description"];
            $upInternSel = $row["InternsSelected"];
            
             $fst = $row["Completed"];
          $flu = $row["LastUpdate"];                            
           if($fst == 'Yes'){
                
                $sd = 'Completed On';
                $ds = $row['CompletedOn'];
                $rs = 'hidden';
            }
            elseif($st == 'in process'){
               
                $sd = 'Projected End Date';
                $ds = $row['ProjectedEndDate'];
                $rs = '';
            }
            else{
                
                $sd = 'Projected End Date';
                $ds = $row['ProjectedEndDate'];
                $rs = '';
            }
        }
}
			if(!empty($_POST['update']))
			{
			    
			    if(!empty($_POST['upload']))
			    {
				$con = mysql_connect("localhost","conorhorgan95","");
				if (!$con)
					echo('Could not connect: ' . mysql_error());
				else
				{
					if (file_exists("download/" . $_FILES["file"]["name"]))
					{
						echo '<script language="javascript">alert(" Sorry!! Filename Already Exists...")</script>';
					}
					else
					{
						move_uploaded_file($_FILES["file"]["tmp_name"],
						"download/" . $_FILES["file"]["name"]) ;
						mysql_select_db("intern_portal", $con);
						$sql = "INSERT INTO FilePath(InternID,ProjectProgressID,Path) VALUES ('" . $_POST["sub"] ."','" . $_POST["pre"] . "','" . 
							  $_FILES["file"]["name"] ."');";
						if (!mysql_query($sql,$con))
							echo('Error : ' . mysql_error());
						else
							echo '<script language="javascript">alert("Thank You!! File Uploded")</script>';
						}
			    	}
				}
				mysql_close($con);
			}
        


?>
<?php 
    $link = mysqli_connect("localhost", "conorhorgan95", "", "intern_portal");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT id, COUNT( * ) AS  'COUNT'
FROM  `ProjectProgress` 
WHERE  `ProjectID` =  '4'";	


 
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
  
              <!--Date Picker JQuery-->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
          <?php 
                                       if ($sresult = mysqli_query($link, $query)) {
                                                                    
                                                                        /* fetch associative array */
                                                                        while ($row = mysqli_fetch_row($sresult)) {
                                                                            $COUNT = $row['COUNT'];
                                                                            $ee = $row['id'];
                                                                        }
                                                                                                                                                    
                                                                            }
                                                                              
                                                                         
                                                                         ?>                               
               
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
                     
                      <input type="submit" name="apply" data-dismiss="modal" data-toggle="modal" href="#add_data_Modal" style="background-color: #269abc; color: #fff;" id="s" value="apply" class="rounded apply-data"> <br><br>
                      </form>
                </div>  
           </div>  
      </div>  
  
   <div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Send Message</h4>
   </div>
   <div class="modal-body">
    <form method="post" id="insert_form">
     <label>Name</label>
     <input type="text" name="fname" id="fname" class="form-control" />
     <br />  
     <label>Description</label>
     <textarea name="fdesc" id="fdesc" class="form-control"></textarea>
     <br />
     <label>Projected End Date</label>
     <input type="text" id="enddate" required="required" name="enddate" class="form-control"  />
                     
     <br />
     <label>Last Update</label>
     <input type="text" name="fupdate" id="fupdate" class="form-control" />
     <br />
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />

    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
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
 $('#insert_form').on("submit", function(event){  
  event.preventDefault();  
  if($('#name').val() == "")  
  {  
   alert("Name is required");  
  }  
  else if($('#address').val() == '')  
  {  
   alert("Address is required");  
  }  
  else if($('#designation').val() == '')
  {  
   alert("Designation is required");  
  }
   
  else  
  {  
   $.ajax({  
    url:"messagep.php",  
    method:"POST",  
    data:$('#insert_form').serialize(),  
    beforeSend:function(){  
     $('#insert').val("Sending");  
    },  
    success:function(data){  
     $('#insert_form')[0].reset();  
     $('#add_data_Modal').modal('hide');  
     $('#employee_table').html(data);  
    }  
   });  
  }  
 });</script>
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
                          $('input#s').attr('id', Intern_id);
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
 <script>
      
                /* SOURCE: https://jqueryui.com/datepicker/ */
                /* global $ */
                $( function() {
                    var dateFormat = "yy-mm-dd",
                      from = $( "#endate" )
                        .datepicker({
                          dateFormat: "yy-mm-dd",
                          defaultDate: "-1m",
                          changeMonth: true,
                          numberOfMonths: 2,
                          minDate: -0
                        })
                        
                 
                    function getDate( element ) {
                      var date;
                      try {
                        date = $.datepicker.parseDate( dateFormat, element.value );
                      } catch( error ) {
                        date = null;
                      }
                 
                      return date;
                    }
                  } );
     


</script>
</html>