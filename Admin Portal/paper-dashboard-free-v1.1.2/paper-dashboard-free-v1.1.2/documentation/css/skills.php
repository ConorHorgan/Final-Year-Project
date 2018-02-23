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

if(mysqli_num_rows($res) > 0)   // checking if there is any row in the resultset
{
    while($row = mysqli_fetch_assoc($res))  // Iterate for each rows
    {
    ?>
       <p> <?php echo($row['location']); ?></p>
       <p><?php echo($row['skill']); ?></p>
        <p><?php echo($row['AverageLineTotal']); ?></p>
                    
    <?php
    }
}


?>
<html>
 <head>
  <title>PHP Test</title>
  <style type="text/css">
      .imagewrap {display:inline-block;position:relative;}
.button1 {position:absolute;bottom:0;left:0; background-image: url("http://www.clker.com/cliparts/d/I/4/7/X/8/location-button-hi.png");}
.button2 {position:absolute;bottom:0;right:0;}
.button3 {position:absolute;right:50%;top:50%;}
  </style>
 </head>
 <body>


<div class="imagewrap">
    <img src="https://i1.wp.com/logisticsviewpoints.com/wp-content/uploads/globe-32299_960_720.png?ssl=1">    
   <input type="button" class="button1" value="Button 1" />
    <input type="button" class="button2" value="Button 2" />
    <input type="button" class="button3" value="Button 3" />
</div>
 </body>
</html>