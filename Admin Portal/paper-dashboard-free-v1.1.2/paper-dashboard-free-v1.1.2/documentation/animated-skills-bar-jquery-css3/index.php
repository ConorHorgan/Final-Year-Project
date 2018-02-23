<?php
$colour =  1;
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
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Animated Skills Bar jQuery & CSS3</title>
  
  <style>
 
[title~="1"] {
    background: #d35400;
}
[title~="2"] {
    background: #2980b9;
}
[title~="3"] {
    background: #46465e;
}
[title~="4"] {
    background: #333333;
}
[title~="5"] {
    background: #27ae60;
}
[title~="6"] {
    background: #124e8c;
}
[title~="7"] {
    background: #4288d0;
}
[title~="8"] {
    background: #4288d0;
}
[title~="9"] {
    background: #4288d0;
}
[title~="10"] {
    background: #4288d0;
}
</style>
  
      <link rel="stylesheet" href="/Admin Portal/paper-dashboard-free-v1.1.2/paper-dashboard-free-v1.1.2/documentation/animated-skills-bar-jquery-css3/css/style.css">
<script type="text/javascript" src="/Admin Portal/paper-dashboard-free-v1.1.2/paper-dashboard-free-v1.1.2/documentation/animated-skills-bar-jquery-css3/js/index.js"></script>
  
</head>

<body>

  <h1>jQuery & CSS3 Skills Bar</h1>
  <?php
    
 
if(mysqli_num_rows($res) > 0)   // checking if there is any row in the resultset
{
    while($row = mysqli_fetch_assoc($res))  // Iterate for each rows
    {
    	if ($colour = 1){
  	$bg = " background: #e67e22;";
  }
  elseif ($colour = 2){
  	$bg = " background: #3498db;";
  }
  elseif ($colour = 3){
  	$bg = " background: #2c3e50;";
  }
  elseif ($colour = 4){
  	$bg = " background: #5a68a5;";
  }
  elseif ($colour = 5){
  	$bg = " background: #525252;";
  }
  elseif ($colour = 6){
  	$bg = " background: #2ecc71;";
  }
  elseif ($colour = 7){
  	$bg = " background: #4288d0;";
  }
    ?>
    <div class="skillbar clearfix " data-percent="75%">
	<div class="skillbar-title" style="background: #333333;"><span><?php echo($row['skill']); ?></span></div>
	<div class="skillbar-bar"  style=" <?php echo($bg); ?> width: 75%;"></div>
	<div class="skill-bar-percent"><?php echo($row['AverageLineTotal']); ?></div>
	
</div> <!-- End Skill Bar -->
    <?php
   echo($colour++);
    }
}
?>

<div class="skillbar clearfix " data-percent="20%">
	<div class="skillbar-title" style="background: #d35400;"><span>HTML5</span></div>
	<div class="skillbar-bar" style="background: #e67e22;  width: 20%;"></div>
	<div class="skill-bar-percent">20%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="25%">
	<div class="skillbar-title" style="background: #2980b9;"><span>CSS3</span></div>
	<div class="skillbar-bar" style="background: #3498db;  width: 25%;"></div>
	<div class="skill-bar-percent">25%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="50%">
	<div class="skillbar-title" style="background: #2c3e50;"><span>jQuery</span></div>
	<div class="skillbar-bar" style="background: #2c3e50;  width: 50%;"></div>
	<div class="skill-bar-percent">50%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="40%">
	<div class="skillbar-title" style="background: #46465e;"><span>PHP</span></div>
	<div class="skillbar-bar" style="background: #5a68a5;  width: 40%;"></div>
	<div class="skill-bar-percent">40%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="75%">
	<div class="skillbar-title" style="background: #333333;"><span>Wordpress</span></div>
	<div class="skillbar-bar" style="background: #525252;  width: 75%;"></div>
	<div class="skill-bar-percent">75%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="100%">
	<div class="skillbar-title" style="background: #27ae60;"><span>SEO</span></div>
	<div class="skillbar-bar" style="background: #2ecc71;  width: 100%;"></div>
	<div class="skill-bar-percent">100%</div>
</div> <!-- End Skill Bar -->

<div class="skillbar clearfix " data-percent="70%">
	<div class="skillbar-title" style="background: #124e8c;"><span>Photoshop</span></div>
	<div class="skillbar-bar" style="background: #4288d0; width: 70%;"></div>
	<div class="skill-bar-percent">70%</div>
</div> <!-- End Skill Bar -->

<p><strong>SOURCE :</strong> http://w3lessons.info/2013/06/04/skill-bar-with-jquery-css3/</p>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

   




</body>

</html>
