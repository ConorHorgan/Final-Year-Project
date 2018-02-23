<?php

    session_start();
    
    if(isset($_POST['submit'])) {
        include 'dbh.inc.php';
        
        $uid = mysqli_real_escape_string($conn, $_post['uid']);
        $pwd = mysqli_real_escape_string($conn, $_post['pwd']);
        
        //Error handlers
        //Check if inputs are empty
        if (empty($uid) || empty($pwd)) {
            
        } 
        else {
            $sql = "SELECT * FROM intern WHERE Email='$uid' OR EmployeeID='$uid'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck < 1) {
                header("Location: ../Welcome.php?login=error");
                exit();
            }
            else {
                if ($row = mysqli_fetch_assoc($result)) {
                    //De-hashing the password
                    $hashingPwdCheck = password_verify($pwd, $row['Password']);
                    if ($hashingPwdCheck == false) {
                        header("Location: ../Welcome.php?login=error");
                        exit();
                    }
                    elseif ($hashingPwdCheck == true) {
                        //User logged in here
                        $_SESSION['u_id'] = $row['id'];
                        $_SESSION['u_first'] = $row['Name'];
                        $_SESSION['u_email'] = $row['Email'];
                        $_SESSION['u_location'] = $row['Location'];
                        header("Location: http://www.website.com");
                       // header("Location: ../Welcome.php?login=success");
                        exit();
                        
                    }
                }
                
            }
        }
        
    }
    else {
            header("Location: ../Welcome.php?login=error");
            exit();
        }
    
?>