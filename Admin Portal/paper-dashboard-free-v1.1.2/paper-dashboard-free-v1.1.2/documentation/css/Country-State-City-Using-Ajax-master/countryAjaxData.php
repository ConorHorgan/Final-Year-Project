<?php
//fetch all country data from database
//Include database configuration file
include('/Admin Portal/paper-dashboard-free-v1.1.2/paper-dashboard-free-v1.1.2/documentation/css/Country-State-City-Using-Ajax-master/include/db_connect.php');

    $query = $mysqli->query("SELECT location FROM project-registration WHERE status = 1 ORDER BY location ASC");// select all country from database 

    //Count total number of rows
    $rowCount = $query->num_rows;

    //Display states list
    if($rowCount > 0)
		
		{
	echo '<option value="">Select Country</option>';// initial message display{  
	//echo '<input type="text" >';// initial message display
        
        while($row = $query->fetch_assoc())
		{
            echo '<option value="'.$row['id'].'">'.$row['location'].'</option>';// select country id & name from country table
        }
    }
	else
	{
        echo '<option value="">Country Not Available</option>'; //display when no data!
	}



?>
