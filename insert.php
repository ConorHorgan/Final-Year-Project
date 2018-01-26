<?php
//SOURCE: https://www.w3schools.com/php/php_mysql_insert.asp
$servername = "localhost";
$username = "conorhorgan95";
$password = "";
$dbname = "intern_portal";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO `project-registration` (projname, smename, smeempoyID, smeemail, smephone, location, startdate, enddate, internsneeded, estimatehours, skill, projdesc) 
    VALUES(:projname, :smename, :smeempoyID, :smeemail, :smephone, :location, :startdate, :enddate, :internsneeded, :estimatehours, :skill, :projdesc)");
    $stmt->bindParam(':projname', $projname);
    $stmt->bindParam(':smename', $smename);
    $stmt->bindParam(':smeempoyID', $smeemployID);
    $stmt->bindParam(':smeemail', $smeemail);
    $stmt->bindParam(':smephone', $smephone);
    $stmt->bindParam(':location', $location);
    $stmt->bindParam(':startdate', $startdate);
    $stmt->bindParam(':enddate', $enddate);
    $stmt->bindParam(':internsneeded', $internsneeded);
    $stmt->bindParam(':estimatehours', $estimatehours);
    $stmt->bindParam(':skill', $skill);
    $stmt->bindParam(':projdesc', $projdesc);
    

    // insert a row
    $projname = $_POST["projname"];
    $smename = $_POST["smename"];
    $smeemployID = $_POST["smeemployID"];
     $smeemail = $_POST["smeemail"];
    $smephone = $_POST["smephone"];
    $email = $_POST["smephone"];
     $location = $_POST["location"];
    $startdate = $_POST["startdate"];
    $enddate = $_POST["enddate"];
    $internsneeded = $_POST["internsneeded"];
    $estimatehours = $_POST["estimatehours"];
    $skill = $_POST["skill"];
    $projdesc = $_POST["projdesc"];
    $stmt->execute();
    
echo 'alert("New records created successfully")';
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
    


?>
 
