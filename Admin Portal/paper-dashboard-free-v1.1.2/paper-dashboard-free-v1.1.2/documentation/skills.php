<?php

$con=mysqli_connect("localhost","conorhorgan95","","intern_portal");
$sql="SELECT  `project-registration`.`location` ,  `ProjectSkills`.`skill` , (
SELECT COUNT(  `ProjectSkills`.`skill` ) 
FROM  `ProjectSkills` 
WHERE  `ProjectSkills`.`projectID` =  `project-registration`.`id`
) AS AverageLineTotal
FROM  `ProjectSkills` 
JOIN  `project-registration` ON  `ProjectSkills`.`projectID` =  `project-registration`.`id` 
WHERE  `project-registration`.`location` =  'Ireland'
LIMIT 0 , 300
";
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }





$res = mysqli_query($con, $sql);




?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <style type="text/css">
      body {
  font-family: 'Ubuntu', sans-serif;
  width:960px;
}

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
    
    

<h1>jQuery & CSS3 Skills Bar</h1>
<?php
if(mysqli_num_rows($res) > 0)   // checking if there is any row in the resultset
{
    while($row = mysqli_fetch_assoc($res))  // Iterate for each rows
    {
    ?>
    <div class="skillbar clearfix " data-percent="20%">
	<div class="skillbar-title" style="background: #d35400;"><span><?php echo($row['skill']); ?></span></div>
	<div class="skillbar-bar" style="background: #e67e22;"></div>
	<div class="skill-bar-percent"><?php echo($row['AverageLineTotal']); ?></div>
</div> <!-- End Skill Bar -->
       
                    
    <?php
    }
}
?>

<div class="skillbar clearfix " data-percent="20%">
	<div class="skillbar-title" style="background: #d35400;"><span>HTML5</span></div>
	<div class="skillbar-bar" style="background: #e67e22;"></div>
	<div class="skill-bar-percent">20%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="25%">
	<div class="skillbar-title" style="background: #2980b9;"><span>CSS3</span></div>
	<div class="skillbar-bar" style="background: #3498db;"></div>
	<div class="skill-bar-percent">25%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="50%">
	<div class="skillbar-title" style="background: #2c3e50;"><span>jQuery</span></div>
	<div class="skillbar-bar" style="background: #2c3e50;"></div>
	<div class="skill-bar-percent">50%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="40%">
	<div class="skillbar-title" style="background: #46465e;"><span>PHP</span></div>
	<div class="skillbar-bar" style="background: #5a68a5;"></div>
	<div class="skill-bar-percent">40%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="75%">
	<div class="skillbar-title" style="background: #333333;"><span>Wordpress</span></div>
	<div class="skillbar-bar" style="background: #525252;"></div>
	<div class="skill-bar-percent">75%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="100%">
	<div class="skillbar-title" style="background: #27ae60;"><span>SEO</span></div>
	<div class="skillbar-bar" style="background: #2ecc71;"></div>
	<div class="skill-bar-percent">100%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="70%">
	<div class="skillbar-title" style="background: #124e8c;"><span>Photoshop</span></div>
	<div class="skillbar-bar" style="background: #4288d0;"></div>
	<div class="skill-bar-percent">70%</div>
</div> <!-- End Skill Bar -->

<p><strong>SOURCE :</strong> http://w3lessons.info/2013/06/04/skill-bar-with-jquery-css3/</p>
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
</body>
</html>