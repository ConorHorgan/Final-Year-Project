<?php 
session_start();
  $query = "SELECT * FROM `project-registration` where `smename` = 'Greg Norman' and `status` = 'in process' ";
  $search_result = filterTable($query);
  
   $rquery = "SELECT  `project-registration`.`projname` ,  `project-registration`.`startdate` ,  `project-registration`.`enddate` ,  `project-registration`.`estimatehours` ,  `project-registration`.`skill` ,  `project-registration`.`projdesc` , GROUP_CONCAT(  `AppliedProjects`.InternName
SEPARATOR  ', ' ) AS InternsSelected
FROM  `project-registration` 
JOIN  `AppliedProjects` ON  `project-registration`.`id` =  `AppliedProjects`.`ProjectID` 
WHERE  `smename` =  'Greg Norman'
AND  `status` =  'finalized'
LIMIT 0 , 300
";
  $rsearch_result = rfilterTable($rquery);
  
  $rrrquery = "SELECT *
FROM message m
    JOIN message_user mu
    ON m.id = mu.message_id
    JOIN intern i
    ON mu.user_id = i.id
WHERE mu.deleted = 'none'
    AND mu.user_id = '1'";
  $rrrsearch_result = rrrfilterTable($rrrquery);
  
  if (isset($_POST["track"])) {
   $_SESSION["progressid"] = "green";    
}else{  
    echo "N0, mail is not set";
}
  
 
  
    // function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "conorhorgan95","","intern_portal");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
  
    // function to connect and execute the query
function rrrfilterTable($rrrquery)
{
    $rrrconnect = mysqli_connect("localhost", "conorhorgan95","","intern_portal");
    $rrrfilter_Result = mysqli_query($rrrconnect, $rrrquery);
    return $rrrfilter_Result;
}
    // function to connect and execute the query
function rfilterTable($rquery)
{
    $rconnect = mysqli_connect("localhost", "conorhorgan95","","intern_portal");
    $rfilter_Result = mysqli_query($rconnect, $rquery);
    return $rfilter_Result;
}

if(isset($_POST['apply']))
{
    $_SESSION['InternN'] = 0;
        $var_value = $_SESSION['varname'];
   $conn = mysqli_connect("localhost", "conorhorgan95","","intern_portal");
   $sql = "UPDATE `Applied`  SET `Finalized`='YES' WHERE `id`= '4' ";
   echo("<script>alert('I am an alert box!');</script>");
 

if (mysqli_query($conn, $sql)) {
   
} else {
    echo "Error updating record: " . mysqli_error($conn);
}



}
if(isset($_POST['needed1']))
{
    
    
        $var_value = $_SESSION['varname'];
   $conn = mysqli_connect("localhost", "conorhorgan95","","intern_portal");
   $sql = "UPDATE `Applied`  SET `Finalized`='YES' WHERE `id`= '4' ";
   echo($sql);
            if (mysqli_query($conn, $sql)) {
               
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
 //   }
  //  else {
   //     $message = "Maximum Number of Interns have been selected";
   //      }   
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!-- CSS for modal comparison -->
     <link href="/InternDashboard/light-bootstrap-dashboard-master/documentation/css/modal.css" rel="stylesheet" />
      <!-- BOOTSTRAP STYLE SHEET -->
    <link href="/InternDashboard/Test/assets/bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLES -->
    <link href="/InternDashboard/Test/assets/style.css" rel="stylesheet" />
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
th, td {
    padding: 15px;
    text-align: left;
}
tr:nth-child(even) {background-color: #f2f2f2;}
/* -------------------- Rounded Corners */
.rounded {
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
}
.modal-backdrop {
    /* bug fix - no overlay */    
    display: none;    
}
.blue    { background-color: #fff; }

@import url(https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz);

.transition (@time: .5s, @range: all, @ease: ease-out) {
  -moz-transition: @range @time @ease;
  -webkit-transition: @range @time @ease;
  -o-transition: @range @time @ease;
  transition: @range @time @ease;
}

.transition-delay (@time: .4s) {
	-webkit-transition-delay: @time;  
	-moz-transition-delay: @time;  
	-o-transition-delay: @time;  
	-transition-delay: @time; 
}

.border-radius(@radius) {
	-moz-border-radius:@radius;
	-webkit-border-radius:@radius; 
  border-radius: @radius;
}

.gradient (@coler1: #fff, @coler2: #ccc) {
    background: @coler1;
    background: -moz-linear-gradient(@coler1, @coler2);
    background: -webkit-linear-gradient(@coler1, @coler2);
    background: -o-linear-gradient(@coler1, @coler2);
}

.box-shadow(@dims:0 0 10px, @color:#000) {
	box-shadow: @dims @color; // Opera, FFX4
	-moz-box-shadow:@dims @color; // FFX3.5
	-webkit-box-shadow:@dims @color; // Safari/Chrome/WebKit
	.ie7 { filter: e(%("progid:DXImageTransform.Microsoft.Shadow(color='%d', Direction=135, Strength=3)", @color)); }
}

.inset(@dims:1px 1px 1px, @color:#fff) {
    box-shadow: @dims @color; // Opera, FFX4
    -moz-box-shadow:@dims @color; // FFX3.5
    -webkit-box-shadow:@dims @color; // Safari/Chrome/WebKit
}
</style>

<style type="text/css">
 /* Comparison Modal */
 /* DIRTY Responsive pricing table CSS */

/* 
- make mobile switch sticky
*/
 *{
  box-sizing:border-box;
  padding:0;
  margin:0;
   outline: 0;
}
body { 
  font-family:Helvetica Neue,Helvetica,Arial,sans-serif;
  font-size:14px;
  padding:14px;
}
article {
  width:100%;
  max-width:1000px;
  margin:0 auto;
  height:1000px;
  position:relative;
}
ul {
  display:flex;
  top:0px;
  z-index:10;
  padding-bottom:14px;
}
li {
  list-style:none;
  flex:1;
}
li:last-child {
  border-right:1px solid #DDD;
}

/* Don't show shadows when selecting text */
::-moz-selection, ::selection {
  background: $highlight_color; 
  color: #fff; 
  text-shadow: none; 
}
button {
  width:100%;
  border: 1px solid #DDD;
  border-right:0;
  border-top:0;
  padding: 10px;
  background:#FFF;
  font-size:14px;
  font-weight:bold;
  height:60px;
  color:#999
}
li.active button {
  background:#F5F5F5;
  color:#000;
}
table { border-collapse:collapse; table-layout:fixed; width:100%; }
th { background:#F5F5F5; display:none; }
.tbl {
  height:53px
}
.tbl { border:1px solid #DDD; padding:10px; empty-cells:show; }
.tbl {
  text-align:left;
}
td+td, th+th {
  text-align:center;
  display:none;
}
th, td {
    border: 1px solid #ddd;
    
}
td.default {
  display:table-cell;
}
.bg-purple {
  border-top:3px solid #A32362;
}
.bg-blue {
  border-top:3px solid #0097CF;
}
.sep {
  background:#F5F5F5;
  font-weight:bold;
}
.txt-l { font-size:28px; font-weight:bold; }
.txt-top { position:relative; top:-9px; left:-2px; }
.tick { font-size:18px; color:#2CA01C; }
.hide {
  border:0;
  background:none;
}

@media (min-width: 640px) {
  ul {
    display:none;
  }
  td,th {
    display:table-cell !important;
  }
  td,th {
    width: 86px;
  
  }
  td+td, th+th {
    width: auto;
  }
}
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
</style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>
<div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Creative Tim
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="dashboard.html">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./user.html">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./table.html">
                            <i class="nc-icon nc-notes"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./typography.html">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./icons.html">
                            <i class="nc-icon nc-atom"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./maps.html">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./notifications.html">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="upgrade.html">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="#pablo"> Dashboard </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Account</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Dropdown</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Email Statistics</h4>
                                <p class="category">Last Campaign Performance</p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Bounce
                                        <i class="fa fa-circle text-warning"></i> Unsubscribe
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Project Applications Which Need Approval</h4>
                                <p class="category"></p>
                            </div>
                             <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                                 <br> 
                                <?php
                                 if($search_result->num_rows === 0)
                                        {
                                            echo ('<p style="text-align: center;">No projects need approval</p>');
                                        }
                                        else
                                        {
                                            echo('
                                           <table id="projects">
                                                    <tr>
                                                        <th class="tbl">Project Name</th>
                                                        <th class="tbl">Start Date</th>
                                                        <th class="tbl">End Date</th>
                                                        <th class="tbl">Interns Needed</th>
                                                        <th class="tbl">Estimate Hours</th>
                                                        <th class="tbl">Skill</th>
                                                        <th class="tbl">Description</th>
                                                        <th class="tbl">Further Information</th>
                                                    </tr>');?>
                        
                                                              <!-- populate table from mysql database -->
                                                                        <?php 
                                                                        while($row = mysqli_fetch_array($search_result)):?>
                                                                        <tr>
                                                                            
                                                                            <td class="tbl"><?php echo $row['projname'];?></td>
                                                                            <td class="tbl"><?php echo $row['startdate'];?></td>
                                                                            <td class="tbl"><?php echo $row['enddate'];?></td>
                                                                            <td class="tbl"><?php echo $row['internsneeded'];?></td>
                                                                            <td class="tbl"><?php echo $row['estimatehours'];?></td>
                                                                            <td class="tbl"><?php echo $row['skill'];?></td>
                                                                            <td class="tbl" style="overflow: auto"><?php echo $row['projdesc'];?></td>
                                                                            <td class="tbl"><input type="button" name="view" value="view" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>
                                                                            <?php $_SESSION["projID"] = $row["id"];
                                                                            $_SESSION["InternN"] = $row["InternN"];
                                                                            $_SESSION["internsneeded"] = $row["internsneeded"];?>
                                                                        </tr>
                                                                            
                                                                        <?php endwhile;}?>
                                                                    </table>
                                                            </form>         
                                                                <div class="footer">
                                                                    <div class="legend">
                                                                        <i class="fa fa-circle text-info"></i> 
                                                                        <i class="fa fa-circle text-danger"></i> 
                                                                        <i class="fa fa-circle text-warning"></i> 
                                                                    </div>
                                                                    <hr>
                                                                    <div class="stats">
                                                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                                                    </div>
                                                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">On going projects</h4>
                                <p class="category"></p></p>
                            </div>
                             <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                                <?php
                                 if($rsearch_result->num_rows === 0)
                                        {
                                            echo ('<p style="text-align: center;">No projects in process</p>');
                                        }
                                        else
                                        {
                                            echo('
                                           <table id="projects">
                                                    <tr>
                                                        <th class="tbl">Project Name</th>
                                                        <th class="tbl">Start Date</th>
                                                        <th class="tbl">End Date</th>
                                                        <th class="tbl">Estimate Hours</th>
                                                        <th class="tbl">Interns Selected</th>
                                                        <th class="tbl">Skill</th>
                                                        <th class="tbl">Description</th>
                                                        <th class="tbl"></th>
                                                    </tr>');?>
                        
                                                              <!-- populate table from mysql database -->
                                                                        <?php 
                                                                        while($row = mysqli_fetch_array($rsearch_result)):?>
                                                                        <tr>
                                                                            
                                                                            <td class="tbl"><?php echo $row['projname'];?></td>
                                                                            <td class="tbl"><?php echo $row['startdate'];?></td>
                                                                            <td class="tbl"><?php echo $row['enddate'];?></td>
                                                                            <td class="tbl"><?php echo $row['estimatehours'];?></td>
                                                                            <td class="tbl"><?php echo $row['InternsSelected'];?></td>
                                                                            <td class="tbl"><?php echo $row['skill'];?></td>
                                                                            <td class="tbl" style="overflow: auto"><?php echo $row['projdesc'];?></td>
                                                                            <td class="tbl"><input type="button" name="view" value="edit" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>
                                                                            <td class="tbl"><input type="submit" name="track" value="track" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs track_data" /></td>
                                                                        </tr>
                                                                            
                                                                        <?php endwhile;}?>
                                                                    </table>
                                                            </form>         
                                                                <div class="footer">
                                                                    <div class="legend">
                                                                        <i class="fa fa-circle text-info"></i> 
                                                                        <i class="fa fa-circle text-danger"></i> 
                                                                        <i class="fa fa-circle text-warning"></i> 
                                                                    </div>
                                                                    <hr>
                                                                    <div class="stats">
                                                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                                                    </div>
                                                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-6" style="
    height: 400px;
    width: 1030px;
">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">2014 Sales</h4>
                                <p class="category">All products including Taxes</p>
                            </div>
                            <!------ Include the above in your HEAD tag ---------->

                           <div class="w3-container">
 
<div class="container">
   
       
    </div>
    <hr />
    
        <button type="button"  class="btn btn-danger" data-toggle="modal" data-target="#add_data_Modal" style="width: 100px; height: 40px;margin-bottom: 5px;">Compose</button>
            <a style="float: right; margin-right: 3px;" class="btn btn-info btn-xs" href="skype:conorhorgan95?call">call user</a>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="list-group">
                                <p class="category"></p>
                            </div>
                             <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                                 <br> 
                                <?php
                                 if($rrrsearch_result->num_rows === 0)
                                        {
                                            echo ('<p style="text-align: center;">No messages</p>');
                                        }
                                        else
                                        {
                                            echo('
                                           ');?>
                        
                                                              <!-- populate table from mysql database -->
                                                                        <?php 
                                                                        while($row = mysqli_fetch_array($rrrsearch_result)):?>
                                                                        <a href="#" class="list-group-item read">
                                           <span class="name" style="min-width: 120px;
                                                display: inline-block;"><?php echo $row['Name'];?> <?php echo $row['LastName'];?></span> <span class=""><?php echo $row['subject'];?></span>
                                            <span class="text-muted" style="font-size: 11px;"><p style="font-size: 11px; display: inline-block;
  width: 100px;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  vertical-align:top">- <?php echo $row['body'];?></p></span> <span
                                                class="badge" style="    float: left; margin-right: 7px;"><?php echo $row['date'];?></span> <span><input type="button" name="view" value="view" id="<?php echo $row["id"]; ?>" style="float: right; margin-right: 3px;" class="btn btn-info btn-xs view_data" /></span></span></a>
                                                                            
                                                                           
                                                                            
                                                                        <?php endwhile;}?>
                                                                     </div>
                </div>
                                                            </form>   
                    
                <div class="tab-pane fade in" id="profile">
                    <div class="list-group">
                        <div class="list-group-item">
                            <span class="text-center">This tab is empty.</span>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade in" id="messages">
                    ...</div>
                <div class="tab-pane fade in" id="settings">
                    This tab is empty.</div>
            </div>
           
    </div>
</div>
													<div class="checkbox">
						  							  	<input id="checkbox2" type="checkbox" checked>
						  							  	<label for="checkbox2"></label>
					  						  		</div>
                                                </td>
                                                <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
													<div class="checkbox">
						  							  	<input id="checkbox3" type="checkbox">
						  							  	<label for="checkbox3"></label>
					  						  		</div>
                                                </td>
                                                <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
												</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
													<div class="checkbox">
						  							  	<input id="checkbox4" type="checkbox" checked>
						  							  	<label for="checkbox4"></label>
					  						  		</div>
                                                </td>
                                                <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
													<div class="checkbox">
						  							  	<input id="checkbox5" type="checkbox">
						  							  	<label for="checkbox5"></label>
					  						  		</div>
                                                </td>
                                                <td>Read "Following makes Medium better"</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
													<div class="checkbox">
						  							  	<input id="checkbox6" type="checkbox" checked>
						  							  	<label for="checkbox6"></label>
					  						  		</div>
                                                </td>
                                                <td>Unfollow 5 enemies from twitter</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>
</div>
 <div id="id01" class="w3-modal">
                    <div class="w3-modal-content">
                      <div class="w3-container">
                        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                        <!-- DIRTY Responsive pricing table HTML -->
                        <!-- SOURCE: https://codepen.io/adrianjacob/pen/KdVLXY -->
                
                <article>
                <?php 
                 $querry = "SELECT * FROM `project-registration` where `smename` = 'Greg Norman' and `status` = 'in process' ";
                  $search_rresult = filterTable($querry);
                    
                    // function to connect and execute the query
                function filterrTable($querry)
                {
                    $connect = mysqli_connect("localhost", "conorhorgan95","","intern_portal");
                    $filterr_Result = mysqli_query($connect, $querry);
                    return $filterr_Result;
                }
                
                 $querrry = "SELECT * 
                                    FROM  `AppliedProjects` 
                                    JOIN  `intern` ON  `AppliedProjects`.`InternID` =  `intern`.`id` 
                                    WHERE  `AppliedProjects`.`ProjectID` =  '".$_SESSION["projID"]."'
                                    LIMIT 0 , 300";
                  $search_rrresult = filterTable($querrry);
                    
                    // function to connect and execute the query
                function filterrrTable($querrry)
                {
                    $connect = mysqli_connect("localhost", "conorhorgan95","","intern_portal");
                    $filterrr_Result = mysqli_query($connect, $querrry);
                    return $filterrr_Result;
                }
                ?>
                
                                                                                    <table id="projects">
                                                                    <tr>
                                                                        <th>Project Name</th>
                                                                        <th>Start Date</th>
                                                                        <th>End Date</th>
                                                                        <th>Interns Needed</th>
                                                                        <th>Estimate Hours</th>
                                                                        <th>Skill</th>
                                                                        <th>Description</th>
                                                                        
                                                                    </tr>
                                        
                                                                              <!-- populate table from mysql database -->
                                                                                        <?php 
                                                                                        while($row = mysqli_fetch_array($search_rresult)):?>
                                                                                        <tr>
                                                                                            
                                                                                            <td><?php echo $row['projname'];?></td>
                                                                                            <td><?php echo $row['startdate'];?></td>
                                                                                            <td><?php echo $row['enddate'];?></td>
                                                                                            <td><?php echo $row['internsneeded'];?></td>
                                                                                            <td><?php echo $row['estimatehours'];?></td>
                                                                                            <td><?php echo $row['skill'];?></td>
                                                                                            <td><?php echo $row['projdesc'];?></td>
                                                                                           <?php $_SESSION['internsneeded'] = $row['internsneeded'];?>
                                                                                           </tr>
                                                                                            
                                                                                        <?php endwhile;?>>
                                                                                    </table>
                                                                              <!-- populate table from mysql database -->
                                                                                        <?php 
                                                                                        $i = 1;
                                                                                      
                                                                                        while($row = mysqli_fetch_array($search_rrresult)):?>
                                                                                      
                                                                                           <?php 
                                                                                                 $LastName = $row['LastName'];
                                                                                                 $Email = $row['Email'];
                                                                                                 $Location = $row['Location'];
                                                                                                 $CollegeMajor = $row['CollegeMajor'];
                                                                                                 $ManagerEmail = $row['ManagerEmail'];
                                                                                                 $Skills = $row['Skills'];
                                                                                                 
                                                                                                    ${"ProjectID$i"} = $row['ProjectID'];                
                                                                                                    ${"variable$i"} = $row['Name'];
                                                                                                    ${"lastName$i"} = $row['LastName'];
                                                                                                    ${"location$i"} = $row['Location'];
                                                                                                    ${"collegemajor$i"} = $row['CollegeMajor'];
                                                                                                    ${"ManagerEmail$i"} = $row['ManagerEmail'];
                                                                                                    ${"skills$i"} = $row['Skills'];
                                                                                                    ${"id$i"} = $row['InternID'];
                                                                                                    $_SESSION['ProjectID'] = $row['ProjectID'];
                                                                                                    $_SESSION['InternID'] = $row['InternID'];
                                                                                                    ${"session$i"} = $_SESSION['InternID'];
                                                                                                  
                                                                                                    
                                                                                                    
                                                                                               $i =  $i + 1;
                                                                                            
                                                                                         endwhile;?>
                <ul>
                  <li class="bg-purple">
                    <button>List</button>
                  </li>
                  <li class="bg-blue">
                    <button><?php$Name?></button>
                  </li>
                  <li class="bg-blue active">
                    <button><?php$Name?></button>
                  </li>
                  <li class="bg-blue">
                    <button>Plus</button>
                  </li>
                </ul>  
                <div class="row">
                   <h3 class="inset-text">Please Assign an Intern to this Project from the List Below</h3>
                   <h4 align="center";>Interns left to assign: <?php $res = $_SESSION['InternN'] - $_SESSION['internsneeded']; if($res < 0){echo("0");}else{echo($res);} ?></h4>
            <div class=" col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2" style=" margin-left: 0px;">
                <?php 
                     $rrquery = "SELECT COUNT(InternID) AS NumberOfInterns FROM AppliedProjects where `ProjectID` = '".$_SESSION['ProjectID']."'";
                     $rrsearch_result = filterTable($rrquery);
                     
                        // function to connect and execute the query
                        function rrfilterTable($rquery)
                        {
                            $rrconnect = mysqli_connect("localhost", "conorhorgan95","","intern_portal");
                            $rrfilter_Result = mysqli_query($rrconnect, $rrquery);
                            return $rrfilter_Result;
                        }
                        echo('<p>xx'.$rrfilter_Result.'</p>');
                ?>
                <div class="db-wrapper" style="width:868px;">
                    <div class="db-pricing-nine">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 218px;"></th>
                                        <th class="db-bk-color-one"><?php echo($variable1. " " .$lastName1);?></th>
                                        <th class="db-bk-color-two"><?php echo($variable2. " " .$lastName2);?></th>
                                        <th class="db-bk-color-three"><?php echo($variable3. " " .$lastName3);?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="db-width-perticular">20 GB Hard Disk Included</td>
                                        <td><?php echo($location1);?></td>
                                        <td><?php echo($location2);?></td>
                                        <td><?php echo($location3);?></td>
                                    </tr>
                                    <tr>
                                        <td class="db-width-perticular">120 TB Bandwidth</td>
                                        <td><?php echo($collegemajor1);?></i></td>
                                        <td><?php echo($collegemajor2);?></td>
                                        <td><?php echo($collegemajor3);?></td>
                                    </tr>
                                    <tr>
                                        <td class="db-width-perticular">Dedicated Support Panel</td>
                                        <td><?php echo($ManagerEmail1);?></td>
                                        <td><?php echo($ManagerEmail2);?></td>
                                        <td><?php echo($ManagerEmail3);?></td>
                                    </tr>
                                    <tr>
                                        <td class="db-width-perticular">Extra Plugin Features</td>
                                        <td><?php echo($skills1);?></td>
                                        <td><?php echo($skills2);?></td>
                                        <td><?php echo($skills3);?></td>
                                    </tr>
                                    <tr>
                                        <td class="db-width-perticular">E-mail Support</td>
                                        <td><i class="glyphicon glyphicon-ok icon-green"></i></td>
                                        <td><i class="glyphicon glyphicon-remove icon-red"></i></td>
                                        <td><i class="glyphicon glyphicon-ok icon-green"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="db-width-perticular">Chat Support Option</td>
                                        <td><?php echo($session1);?></i></td>
                                        <td><?php echo($session2);?></td>
                                        <td><?php echo($session3);?></td>
                                    </tr>
                                    <tr>
                                        <td class="db-width-perticular">Dedicated Support Panel</td>
                                        <td><i class="glyphicon glyphicon-ok icon-green"></i></td>
                                        <td><i class="glyphicon glyphicon-remove icon-red"></i></td>
                                        <td><i class="glyphicon glyphicon-ok icon-green"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="db-width-perticular">Extra Plugin Features</td>
                                        <td><i class="glyphicon glyphicon-remove icon-red"></i></td>
                                        <td><i class="glyphicon glyphicon-remove icon-red"></i></td>
                                        <td><i class="glyphicon glyphicon-ok icon-green"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="db-width-perticular">E-mail Support</td>
                                        <td><i class="glyphicon glyphicon-ok icon-green"></i></td>
                                        <td><i class="glyphicon glyphicon-remove icon-red"></i></td>
                                        <td><i class="glyphicon glyphicon-ok icon-green"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="db-width-perticular">Chat Support Option</td>
                                        <td><i class="glyphicon glyphicon-ok icon-green"></i></td>
                                        <td><i class="glyphicon glyphicon-ok icon-green"></i></td>
                                        <td><i class="glyphicon glyphicon-remove icon-red"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="db-width-perticular"></td>
                                        <td><input type="submit"  id="<?php echo($id1);?>"class="btn db-button-color-one needed" value="Select"> </td>
                                        <td><input type="submit" name="needed2" onClick="this.disabled=true; <?php  $_SESSION['InternID'] = $session2?>this.value='Already Selected';" id="<?php echo($id2);?>"class="btn db-button-color-two needed" value="Select"></td>
                                        <td><input type="submit" name="needed3" onClick="this.disabled=true; <?php  $_SESSION['InternID'] = $session3?>this.value='Already Selected';" id="<?php echo($id3);?>"class="btn db-button-color-three needed" value="Select"> </td>
                                    <!--  $_SESSION['InternID'] = $session1?>-->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
   </div>
   </div>
   </div>
   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
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
     <label>Reciever</label>
     <select name="gender" id="gender" class="form-control">
        <option value="" disabled ></option>
                          <?php
                          $host = 'localhost';
                          $user = 'conorhorgan95';
                          $pass = '';
                          mysql_connect($host, $user, $pass);
                          mysql_select_db('intern_portal');
                        $n = 1;
                          $select=mysql_query("select Name, LastName from intern group by Name");
                          while($row=mysql_fetch_array($select))
                          {
                           echo "<option>".$row['Name'].' '.$row['LastName']."</option>";
                            ${"id$n"} = $row['id'];
                            $n = $n + 1;
                          }
                          ?>
                          
                        
     </select>
     <br />  
     <label>Subject</label>
     <textarea name="address" id="address" class="form-control"></textarea>
     <br />
     <label>Body</label>
     <input type="textarea" name="name" id="name" class="form-control" />
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

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
	
	<script src="jquery.textfill.min.js"></script>

	<script type="text/javascript">
    	function myFunction(a) {

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome Back"

            },{
                type: 'info',
                timer: 4000
            });

    	};
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
    url:"message.php",  
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
       $(document).on('click', '.needed', function(){  
          var employee_id = $(this).attr("id");    
         // if(employee_id != '')  
           //{
                $.ajax({  
                    url:"/InternDashboard/select1.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                         
                     }  
                });  
           //}            
      }); 
</script>
<script>
/* global $ */
       $(document).on('click', '.track_data', function(){  
          var track_id = $(this).attr("id");    
         if(track_id != '')  
         {
                $.ajax({  
                    url:"/InternDashboard/light-bootstrap-dashboard-master/ProjectProgression/progress.php",  
                     method:"POST",  
                     data:{track_id:track_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                         
                     }  
                });  
           }            
      }); 
</script>
	<script>
/* global $ */
       $(document).on('click', '.zzz', function(){  
           var employee_id = $(this).attr("id");  
          alert('sss');
          /* if(employee_id != '')  
           {  
                $.ajax({  
                    url:"/InternDashboard/light-bootstrap-dashboard-master/documentation/select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#id01').modal('show');  
                     }  
                });  
           } */           
      }); 
</script>
 <script>
/* global $ */
       $(document).on('click', '.message_data', function(){  
           var Intern_id = $(this).attr("name");
          alert('nice')
                          $('#employee_detail').html(data);  
                          $('#messageModal').modal('show');  
                     
                  
                       
      }); 
</script>
	<script>
/* global $ */
       $(document).on('click', '.view_data', function(){  
           var employee_id = $(this).attr("id");  
           $('#id01').modal('show'); 
          /* if(employee_id != '')  
           {  
                $.ajax({  
                    url:"/InternDashboard/light-bootstrap-dashboard-master/documentation/select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#id01').modal('show');  
                     }  
                });  
           } */           
      }); 
</script>
<style>

// Initialize the media query
  var mediaQuery = window.matchMedia('(min-width: 640px)');
  
  // Add a listen event
  mediaQuery.addListener(doSomething);
  
  // Function to do something with the media query
  function doSomething(mediaQuery) {    
    if (mediaQuery.matches) {
      $('.sep').attr('colspan',5);
    } else {
      $('.sep').attr('colspan',2);
    }
  }
  
  // On load
  doSomething(mediaQuery);
</script>

</html>


