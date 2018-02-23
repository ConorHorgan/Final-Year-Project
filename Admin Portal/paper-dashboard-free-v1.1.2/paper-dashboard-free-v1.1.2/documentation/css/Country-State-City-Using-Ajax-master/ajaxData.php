<?php
//Include database configuration file
include('/Admin Portal/paper-dashboard-free-v1.1.2/paper-dashboard-free-v1.1.2/documentation/css/Country-State-City-Using-Ajax-master/include/db_connect.php');

if(isset($_POST["country_id"]) && !empty($_POST["country_id"])){
    //Get all state data
    $query = $mysqli->query("SELECT * FROM project-registration WHERE id = ".$_POST['country_id']." AND status = 1 ORDER BY location ASC");

    //Count total number of rows
    $rowCount = $query->num_rows;

    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select state</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['id'].'">'.$row['location'].'</option>';
        }
    }else{
        echo '<option value="">State not available</option>';
    }
}

if(isset($_POST["state_id"]) && !empty($_POST["state_id"])){
    //Get all city data
	echo "asdasd";
    $query = $mysqli->query("SELECT * FROM project-registration WHERE id = ".$_POST['state_id']." AND status = 1 ORDER BY location ASC");

    //Count total number of rows
    $rowCount = $query->num_rows;

    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select city</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['id'].'">'.$row['location'].'</option>';
        }
    }else{
        echo '<option value="">City not available</option>';
    }
}




?>
