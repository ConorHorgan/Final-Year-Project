<!-- Main Source: http://www.webslesson.info/2016/09/php-ajax-display-dynamic-mysql-data-in-bootstrap-modal.html --> 
<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: /login-system/error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
    $id = $_SESSION['id'];
}

if(isset($_POST['search']))
{
    
    $valueLocation = $_POST['location'];
    $valueSkill = $_POST['skill'];
    $endDate = $_POST['enddate'];
    $startDate = $_POST['startdate'];
    print "Study PHP at " . $endDate . "<br>";
    
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `project-registration` WHERE `location` LIKE '".$valueLocation."' AND `skill` LIKE '".$valueSkill."' AND startdate >= '".$startDate."' AND enddate <= '".$endDate."'";
print "Study PHP at " . $query . "<br>";  
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `project-registration`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "conorhorgan95","","intern_portal");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
if(isset($_POST['apply']))
{
$connect = mysqli_connect("localhost", "conorhorgan95", "", "intern_portal");  
  $sql = " UPDATE project-registration SET InternsSelected= '' WHERE id = '".$_POST["employee_id"]."'";
   
   if (mysqli_query($conn, $sql)) {
      echo "Record updated successfully";
   } else {
      echo "Error updating record: " . mysqli_error($conn);
   }
   mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
       /* Source: https://www.w3schools.com/html/html_tables.asp*/
            #projects {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#projects td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#projects tr:nth-child(even){background-color: #f2f2f2;}

#projects tr:hover {background-color: #ddd;}

#projects th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color:  #009973;
    color: white;
}
.styled-select {
   height: 29px;
   overflow: hidden;
   width: 240px;
}
.styled-select select {
   background: transparent;
   border: none;
   font-size: 14px;
   height: 29px;
   padding: 5px; /* If you add too much padding here, the options won't show in IE */
   width: 268px;

}

.styled-select.slate {
   height: 34px;
   width: 240px;
}

.styled-select.slate select {
   border: 1px solid #ccc;
   font-size: 16px;
   height: 34px;
   width: 268px;
}

/* -------------------- Rounded Corners */
.rounded {
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
}
.blue    { background-color: #fff; }
</style>


        </style>
        <style>
        /* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
           <!--Date Picker JQuery-->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    </head>
    <body>
        
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
             <select name="location" type="text" id="location" required="required" class="styled-select blue rounded">
                        <option value="" disabled selected>Current Office Location</option>
                        <option value="Boston">Boston</option>
                        <option value="Ireland">Ireland</option>
                        <option value="India">India</option>
                        <option value="North Quincy">North Quincy</option>
                      </select>
                     <select name="skill" type="text" id="skill" required="required" class="styled-select blue rounded">
                        <option value="" disabled selected>Choose your skills</option>
                        <option value="PHP">PHP</option>
                        <option value="Codeigniter">Codeigniter</option>
                        <option value="HTML">HTML</option>
                        <option value="JQuery">JQuery</option>
                        <option value="Javascript">Javascript</option>
                        <option value="CSS">CSS</option>
                        <option value="Laravel">Laravel</option>
                        <option value="CakePHP">CakePHP</option>
                        <option value="Symfony">Symfony</option>
                        <option value="Codeigniter">Codeigniter</option>
                        <option value="HTML">HTML</option>
                        <option value="Yii 2">Yii 2</option>
                        <option value="Phalcon">Phalcon</option>
                        <option value="Zend">Zend</option>
                        <option value="Slim">Slim</option>
                        <option value="FuelPHP">FuelPHP</option>
                      </select>
                      <input type="text" id="startdate" required="required" name="startdate" class="styled-select blue rounded" placeholder="Ideal Project Start Date" />
                        <input type="text" id="enddate" required="required" name="enddate" class="styled-select blue rounded" placeholder="Ideal Project End Date" />
                      
        
            <input type="submit" name="search" style="background-color: #269abc; color: #fff;" value="Filter" class="rounded"> <br><br>
            
            <table id="projects">
                <tr>
                    <th>Project Name</th>
                    <th>Location</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Interns Needed</th>
                    <th>Estimate Hours</th>
                    <th>Skill</th>
                    <th>Further Information</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    
                    <td><?php echo $row['projname'];?></td>
                    <td><?php echo $row['location'];?></td>
                    <td><?php echo $row['startdate'];?></td>
                    <td><?php echo $row['enddate'];?></td>
                    <td><?php echo $row['internsneeded'];?></td>
                    <td><?php echo $row['estimatehours'];?></td>
                    <td><?php echo $row['skill'];?></td>
                    <td><input type="button" name="view" value="view" id="<?php echo $row["id"]; ?>" class="view_data" /></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
        <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Employee Details</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
    </body>
</html>
<!--<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Employee Details</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                     <input type="button" name="apply" value="Apply"  class="btn btn-info btn-xs apply" />
                </div>  
           </div>  
      </div>  
 </div>  -->
<script>
/* global $ */
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{employee_id:employee_id},  
                success:function(data){  
                     $('#employee_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>

/* global $ */
     <!--  $(document).on('click', '.view_data', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"/search/select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  -->
      <script>
      
                /* SOURCE: https://jqueryui.com/datepicker/ */
                /* global $ */
                $( function() {
                    var dateFormat = "yy-mm-dd",
                      from = $( "#startdate" )
                        .datepicker({
                          dateFormat: "yy-mm-dd",
                          defaultDate: "+1d",
                          changeMonth: true,
                          numberOfMonths: 2,
                          minDate: -0
                        })
                        .on( "change", function() {
                          to.datepicker( "option", "minDate", getDate( this ) );
                        }),
                      to = $( "#enddate" ).datepicker({
                       dateFormat: "yy-mm-dd",
                        defaultDate: "+1w",
                        changeMonth: true,
                        numberOfMonths: 2
                      })
                      .on( "change", function() {
                        from.datepicker( "option", "maxDate", getDate( this ) );
                      });
                 
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

