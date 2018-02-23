<?php 
session_start();
  $query = "SELECT * FROM `project-registration` where `smename` = 'Greg Norman' and `status` = 'in process' ";
  $search_result = filterTable($query);
  
    // function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "conorhorgan95","","intern_portal");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
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
    <div class="sidebar" data-color="orange" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.html">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>
                                        

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


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
                                <input type="submit" class="btn db-button-color-one zzz" value="Select"> 
                                <h4 class="title">Users Behavior</h4>
                                <p class="category">24 Hours performance</p>
                            </div>
                             <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                                <?php
                                 if($search_result->num_rows === 0)
                                        {
                                            echo ('No projects need approval');
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
                                                                            
                                                                        <?php endwhile;}?>>
                                                                    </table>
                                                            </form>         
                                                                <div class="footer">
                                                                    <div class="legend">
                                                                        <i class="fa fa-circle text-info"></i> Open
                                                                        <i class="fa fa-circle text-danger"></i> Click
                                                                        <i class="fa fa-circle text-warning"></i> Click Second Time
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
                                <h4 class="title">Users Behavior</h4>
                                <p class="category">24 Hours performance</p>
                            </div>
                             <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                                <?php
                                 if($search_result->num_rows === 0)
                                        {
                                            echo ('No projects need approval');
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
                                                                            $_SESSION["internsneeded"] = $row["internsneeded"];?>
                                                                        </tr>
                                                                            
                                                                        <?php endwhile;}?>>
                                                                    </table>
                                                            </form>         
                                                                <div class="footer">
                                                                    <div class="legend">
                                                                        <i class="fa fa-circle text-info"></i> Open
                                                                        <i class="fa fa-circle text-danger"></i> Click
                                                                        <i class="fa fa-circle text-warning"></i> Click Second Time
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
<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Employee Details</h4>  
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
 </div>  


                <div class="row">
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">2014 Sales</h4>
                                <p class="category">All products including Taxes</p>
                            </div>
                           <div class="w3-container">
  <h2>W3.CSS Modal</h2>
<!--  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Modal</button>
-->
 
                                <div class="footer">
                                    <a href="skype:conorhorgan95?call">Link will initiate Skype call to username</a>
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Tesla Model S
                                        <i class="fa fa-circle text-danger"></i> BMW 5 Series
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Tasks</h4>
                                <p class="category">Backend development</p>
                            </div>
                            <div class="content">
                                <div class="table-full-width">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
													<div class="checkbox">
						  							  	<input id="checkbox1" type="checkbox">
						  							  	<label for="checkbox1"></label>
					  						  		</div>
                                                </td>
                                                <td>Sign contract for "What are conference organizers afraid of?"</td>
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
                <table>
                  <thead>
                    <tr>
                      <th class="hide"></th>
                      <th class="bg-purple">Classifications</th>
                       <th class="bg-purple" style="height:80px; bgcolor=#0e83cd"><?php echo($variable1. " " .$lastName1);?></th>
                      <th class="bg-blue"><?php echo($variable2. " " .$lastName2);?></th>
                      <th class="bg-blue default"><?php echo($variable3. " " .$lastName3);?></th>
                      <th class="bg-blue"><?php echo($variable4. " " .$lastName4);?></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td colspan="5" class="sep">Get started easily</td>
                    </tr>
                    <tr>
                      <td bgcolor="#0e83cd">Office Location</td>
                      <td><?php echo($location1);?></td>
                      <td><span ><?php echo($location2);?></span></td>
                      <td class="default"><span><?php echo($location3);?></span></td>
                      <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                      <td>College Major</td>
                      <td><span><?php echo($collegemajor1);?></span></td>
                      <td><span><?php echo($collegemajor2);?></span></td>
                      <td><span><?php echo($collegemajor3);?></span></td>
                      <td><span><?php echo($collegemajor4);?></span></td>
                    </tr>
                    <tr>
                      <td>Manager's Email</td>
                      <td><span><?php echo($ManagerEmail1);?></span></td>
                      <td><span><?php echo($ManagerEmail2);?></span></td>
                      <td><span><?php echo($ManagerEmail3);?></span></td>
                      <td><span><?php echo($ManagerEmail4);?></span></td>
                    </tr>
                    <tr>
                      <td>Skills</td>
                      <td><span><?php echo($skills1);?></span></td>
                      <td><span><?php echo($skills2);?></span></td>
                      <td><span><?php echo($skills3);?></span></td>
                      <td><span><?php echo($skills4);?></span></td>
                    </tr>
                    <tr>
                      <td colspan="5" class="sep">Stay protected and get support</td>
                    </tr>
                    <tr>
                      <td>Free telephone and online support</td>
                      <td></td>
                      <td><span class="tick">&#10004;</span></td>
                      <td class="default"><span class="tick">&#10004;</span></td>
                      <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                      <td>Strong encryption protects your business data</td>
                      <td><span class="tick">&#10004;</span></td>
                      <td><span class="tick">&#10004;</span></td>
                      <td class="default"><span class="tick">&#10004;</span></td>
                      <td><span class="tick">&#10004;</span></td>
                    </tr>
                    <tr>
                      <td>Automatic data backups</td>
                      <td><span class="tick">&#10004;</span></td>
                      <td><span class="tick">&#10004;</span></td>
                      <td class="default"><span class="tick">&#10004;</span></td>
                      <td><span class="tick">&#10004;</span></td>
                    </tr>
                  </tbody>
                </table>
                  
                </article>
                	<div id="container">
                		<div class="pricing-table basic" style="width:200px;">
                			<span class="table-head">
                				<?php echo($variable1. " " .$lastName1);?>
                			</span>
                			<span class="price">
                				<?php echo($skills1);?>
                			</span>
                			<span class="table-row">Option</span>
                			<span class="table-row">Option</span>
                			<span class="table-row">Option</span>
                			<span class="table-row">Option</span>
                			<span class="table-row">Option</span>
                			<span class="table-row">Option</span>
                			<div class="purchase">
                				<a href="#" class="buy">Purchase</a>
                			</div>
                		</div>
                
                		<div class="pricing-table standard" style="width:200px;">
                			<span class="table-head">
                				<?php echo($variable2. " " .$lastName2);?>
                			</span>
                			<span class="price">
                				<?php echo($skills2);?>
                			</span>
                			<span class="table-row">Option</span>
                			<span class="table-row">Option</span>
                			<span class="table-row">Option</span>
                			<span class="table-row">Option</span>
                			<span class="table-row">Option</span>
                			<span class="table-row">Option</span>
                			<div class="purchase">
                				<a href="#" class="buy">Purchase</a>
                			</div>
                		</div>
                
                		<div class="pricing-table premium" style="width:200px;">
                			<span class="table-head">
                				<?php echo($variable3. " " .$lastName3);?>
                			</span>
                			<span class="price">
                				<?php echo($skills3);?>
                			</span>
                			<span class="table-row">Option</span>
                			<span class="table-row">Option</span>
                			<span class="table-row">Option</span>
                			<span class="table-row">Option</span>
                			<span class="table-row">Option</span>
                			<span class="table-row">Option</span>
                			<div class="purchase">
                				<a href="#" class="buy">Purchase</a>
                			</div>
                		</div>
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
</<script type="text/javascript" src="">
    // DIRTY Responsive pricing table JS
/* global $ */
$( "ul" ).on( "click", "li", function() {
  var pos = $(this).index()+2;
  $("tr").find('td:not(:eq(0))').hide();
  $('td:nth-child('+pos+')').css('display','table-cell');
  $("tr").find('th:not(:eq(0))').hide();
  $('li').removeClass('active');
  $(this).addClass('active');
});

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


