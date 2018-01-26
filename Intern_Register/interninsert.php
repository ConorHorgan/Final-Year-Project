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
    $stmt = $conn->prepare("INSERT INTO `intern` (Name, Email, PhoneNumber, Location, CollegeMajor, ManagerEmail, EndDate, Skills, Interests, Bio, Laptop, Password) 
    VALUES(:name, :email, :phonenumber, :location, :collegemajor, :manageremail, :enddate, :skills, :interests, :bio, :laptop, :password)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':location', $location);
     $stmt->bindParam(':phonenumber', $phonenumber);
    $stmt->bindParam(':collegemajor', $collegemajor);
    $stmt->bindParam(':manageremail', $manageremail);
    $stmt->bindParam(':enddate', $enddate);
    $stmt->bindParam(':laptop', $laptop);
    $stmt->bindParam(':interests', $interests);
    $stmt->bindParam(':bio', $bio);
    $stmt->bindParam(':skills', $skills);
    $stmt->bindParam(':password', $password);
   
    

    // insert a row
    $name = $_POST["name"];
    $email = $_POST["email"];
    $location = $_POST["location"];
    $phonenumber = $_POST["phonenumber"];
    $collegemajor = $_POST["collegemajor"];
    $manageremail = $_POST["manageremail"];
    $enddate = $_POST["enddate"];
    $laptop = $_POST["laptop"];
    $interests = $_POST["interests"];
    $bio = $_POST["bio"];
    $skills = $_POST["skill"];
    $password = $_POST["password"];
    $stmt->execute();
    
    
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
    


?>
 
