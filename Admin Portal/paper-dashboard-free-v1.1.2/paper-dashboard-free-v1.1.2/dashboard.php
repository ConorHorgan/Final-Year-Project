<?php
if(isset($_POST['search']))
{
    $valueLocation = $_POST['location'];
    $link = mysql_connect("localhost", "conorhorgan95", "");
    mysql_select_db("intern_portal", $link);

    //Count number of rows in table intern
    $result = mysql_query("SELECT * FROM intern where `location` = '".$valueLocation."'", $link);
    $num_rows = mysql_num_rows($result);
    
    //Count number of rows in table sme
    $smeResult = mysql_query("SELECT * FROM sme", $link);
    $smenum_rows = mysql_num_rows($smeResult);
   
            //Count number of rows in table project-registration
            $projResult = mysql_query("SELECT * 
            FROM  `project-registration` ", $link);
            $projnum_rows = mysql_num_rows($projResult);

            $con=mysqli_connect("localhost","conorhorgan95","","intern_portal");
            $sql="SELECT  `project-registration`.`location` ,  `ProjectSkills`.`skill` , (
            SELECT COUNT(  `ProjectSkills`.`skill` ) 
            FROM  `ProjectSkills` 
            WHERE  `ProjectSkills`.`projectID` =  `project-registration`.`id`
            ) AS AverageLineTotal
            FROM  `ProjectSkills` 
            JOIN  `project-registration` ON  `ProjectSkills`.`projectID` =  `project-registration`.`id` 
            WHERE  `project-registration`.`location` = '".$valueLocation."'
            LIMIT 0 , 300
            ";
                // Check connection
                if (mysqli_connect_errno())
                  {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                  }
                    $res = mysqli_query($con, $sql); 
    
}
 else {
     //Connect to the db
$link = mysql_connect("localhost", "conorhorgan95", "");
mysql_select_db("intern_portal", $link);

//Count number of rows in table intern
$result = mysql_query("SELECT * FROM intern", $link);
$num_rows = mysql_num_rows($result);

//Count number of rows in table sme
$smeResult = mysql_query("SELECT * FROM sme", $link);
$smenum_rows = mysql_num_rows($smeResult);
   
//Count number of rows in table project-registration
$projResult = mysql_query("SELECT * 
FROM  `project-registration` ", $link);
$projnum_rows = mysql_num_rows($projResult);

$con=mysqli_connect("localhost","conorhorgan95","","intern_portal");
$sql="SELECT `ProjectSkills`.`skill` , (
SELECT COUNT(  `ProjectSkills`.`skill` ) 
FROM  `ProjectSkills` 
WHERE  `ProjectSkills`.`projectID` =  `project-registration`.`id`
) AS AverageLineTotal
FROM  `ProjectSkills` 
JOIN  `project-registration` ON  `ProjectSkills`.`projectID` =  `project-registration`.`id` 
LIMIT 0 , 300
";
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }





$res = mysqli_query($con, $sql);
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Intern Portal</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <!--  Select input CSS    -->
   <style type="text/css">
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
    
    <!-- Skill Bar CSS -->
     <style type="text/css">
     

p{
  color:#525252;
  font-size:12px;
}

.skillbar {
	position:relative;
	display:block;
	margin-bottom:15px;
	width:100%;
	background:#eee;
	height:35px;
	border-radius:3px;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	-webkit-transition:0.4s linear;
	-moz-transition:0.4s linear;
	-ms-transition:0.4s linear;
	-o-transition:0.4s linear;
	transition:0.4s linear;
	-webkit-transition-property:width, background-color;
	-moz-transition-property:width, background-color;
	-ms-transition-property:width, background-color;
	-o-transition-property:width, background-color;
	transition-property:width, background-color;
}

.skillbar-title {
	position:absolute;
	top:0;
	left:0;
width:110px;
	font-weight:bold;
	font-size:13px;
	color:#ffffff;
	background:#6adcfa;
	-webkit-border-top-left-radius:3px;
	-webkit-border-bottom-left-radius:4px;
	-moz-border-radius-topleft:3px;
	-moz-border-radius-bottomleft:3px;
	border-top-left-radius:3px;
	border-bottom-left-radius:3px;
}

.skillbar-title span {
	display:block;
	background:rgba(0, 0, 0, 0.1);
	padding:0 20px;
	height:35px;
	line-height:35px;
	-webkit-border-top-left-radius:3px;
	-webkit-border-bottom-left-radius:3px;
	-moz-border-radius-topleft:3px;
	-moz-border-radius-bottomleft:3px;
	border-top-left-radius:3px;
	border-bottom-left-radius:3px;
}

.skillbar-bar {
	height:35px;
	width:0px;
	background:#6adcfa;
	border-radius:3px;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
}

.skill-bar-percent {
	position:absolute;
	right:10px;
	top:0;
	font-size:11px;
	height:35px;
	line-height:35px;
	color:#ffffff;
	color:rgba(0, 0, 0, 0.4);
}

  </style>

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
  
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                   Intern Portal
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.html">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.html">
                        <i class="ti-user"></i>
                        <p>SME Admin</p>
                    </a>
                </li>
                <li>
                    <a href="Intern.html">
                        <i class="ti-user"></i>
                        <p>Intern Admin</p>
                    </a>
                </li>
                 <li class="active">
                    <a href="intern1.html">
                        <i class="ti-user"></i>
                        <p>Project Admin</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="ti-view-list-alt"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="ti-text"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="ti-pencil-alt2"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="ti-map"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="ti-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="ti-export"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
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
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-server"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Interns Registered</p>
                                            <?php echo( $num_rows);?>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> Updated now
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-wallet"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>SMES Registered</p>
                                            <?php echo($smenum_rows);?>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-calendar"></i> Last day
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-pulse"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Projects Registered </p>
                                            <?php echo($projnum_rows);?>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-timer"></i> In the last hour
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-twitter-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Overall Active Interns Now</p>
                                            6
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-reload"></i> Updated now
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Breakdown of skills registered for projects in different office locations</h4>
                                <p class="category">24 Hours performance</p>
                            </div>
                            <div class="content">
                                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
             <select name="location" type="text" id="location" required="required" class="styled-select blue rounded">
                        <option value="" disabled selected>Current Office Location</option>
                        <option value="Boston">Boston</option>
                        <option value="Ireland">Ireland</option>
                        <option value="India">India</option>
                        <option value="North Quincy">North Quincy</option>
                      </select>
                   <!--   <input type="text" id="startdate" required="required" name="startdate" class="styled-select blue rounded" placeholder="Ideal Project Start Date" />
                        <input type="text" id="enddate" required="required" name="enddate" class="styled-select blue rounded" placeholder="Ideal Project End Date" />
           --> <input type="submit" name="search" style="background-color: #269abc; color: #fff;" value="Filter" class="rounded"> <br><br>
</form>
                               <?php
if(mysqli_num_rows($res) > 0)   // checking if there is any row in the resultset
{
    while($row = mysqli_fetch_assoc($res))  // Iterate for each rows
    {
    ?>
    <?php $per = $row['AverageLineTotal'];
          $wo  = ($per/4)*100;
          $col = $row['skill'];
          if($col=='HTML'){
              $as = '#333333';
              $sa = '#3498db';
          }?>
    <div class="skillbar clearfix " data-percent="70%">
	<div class="skillbar-title" title="<?php echo($row['skill']); ?>" style="background:<?php echo($as); ?>;"><span><?php echo($row['skill']); ?></span></div>
	<div class="skillbar-bar" style=" background: <?php echo($sa); ?>; width: <?php echo($wo); ?>%"></div>
	<div class="skill-bar-percent"><?php echo($row['AverageLineTotal']); ?></div>
</div> <!-- End Skill Bar -->
       
                    
    <?php
    }
}
?>

<p><strong>SOURCE :</strong> http://w3lessons.info/2013/06/04/skill-bar-with-jquery-css3/</p>
  
                                <div class="footer">
                                    <div class="chart-legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Click
                                        <i class="fa fa-circle text-warning"></i> Click Second Time
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="ti-reload"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Email Statistics</h4>
                                <p class="category">Last Campaign Performance</p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                <div class="footer">
                                    <div class="chart-legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Bounce
                                        <i class="fa fa-circle text-warning"></i> Unsubscribe
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="ti-timer"></i> Campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">2015 Sales</h4>
                                <p class="category">All products including Taxes</p>
                            </div>
                            <div class="content">
                                <div id="chartActivity" class="ct-chart"></div>

                                <div class="footer">
                                    <div class="chart-legend">
                                        <i class="fa fa-circle text-info"></i> Tesla Model S
                                        <i class="fa fa-circle text-warning"></i> BMW 5 Series
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="ti-check"></i> Data information certified
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
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Welcome back <b>Conor Horgan</b>"

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>

</html>
<script src="js/scripts.js">
  /* global jQuery */
      jQuery(document).ready(function(){
	jQuery('.skillbar').each(function(){
		jQuery(this).find('.skillbar-bar').animate({
			width:jQuery(this).attr('data-percent')
		},6000);
	});
});
</script>
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
