<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM intern WHERE Email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: error.php");
}
else { // User exists
   
  $password = $mysqli->escape_string($_POST['password']);
  $result = $mysqli->query("SELECT * FROM intern WHERE Email='$email' AND Password='$password'");
    if ( $result->num_rows == 1 ){
    //if ( password_verify($_POST['password'], $password) ) {
        $user = $result->fetch_assoc();
      $_SESSION['email'] = $user['Email'];
      $_SESSION['first_name'] = $user['Name'];
       $_SESSION['last_name'] = $user['LastName'];
      $_SESSION['active'] = $user['CollegeMajor'];
      $_SESSION['id'] = $user['id'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: profile.php");
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error.php");
    }
}

