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
    $stmt = $conn->prepare("INSERT INTO `sme` (SmeName, SMELastName, SmeEmail, SmePhone, Password) 
    VALUES(:name, :lastname, :email, :phonenumber, :password)");
    $stmt->bindParam(':name', $name);
     $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);
     $stmt->bindParam(':phonenumber', $phonenumber);
    $stmt->bindParam(':password', $password);

    // insert a row
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $password = $_POST["password"];
    $stmt->execute();
    
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
    


?>
 
