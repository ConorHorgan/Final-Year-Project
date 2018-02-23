<!-- Source: http://www.webslesson.info/2016/09/php-ajax-display-dynamic-mysql-data-in-bootstrap-modal.html --> 
<?php  
session_start();
     if(isset($_POST["employee_id"])) 
     {
         $_SESSION['InternN'] = 0;
         if($_SESSION['internsneeded'] >= $_SESSION['InternN'] )
         {
             
         $_SESSION['InternN'] = $_SESSION['InternN'] + 1;
      $output = '';  
        $servername = "localhost";
        $username = "conorhorgan95";
        $password = "";
        $dbname = "intern_portal";
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $itr = $_SESSION['InternID'];
        $prj = $_SESSION['ProjectID'];
        $int = $_SESSION['InternN'];
          echo '<script type="text/javascript"> alert('.$_SESSION['InternN'].')</script>';
          echo '<script type="text/javascript"> alert('.$prj.')</script>';
          
        $sql = "UPDATE `AppliedProjects` SET `Finalized`='YES' WHERE `InternID`='".$_POST["employee_id"]."' AND `InternN` = '$int' AND `ProjectID`='$prj'";
        
        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
        
        
        if($_SESSION['InternN'] = $_SESSION['internsneeded'])
        {
             $sqlr = "UPDATE `project-registration` SET `status`='finalized' where `id` = '$prj' ";
             if (mysqli_query($conn, $sqlr)) {
            echo "Record updated successfully";
              $query = "SELECT * FROM `project-registration` where `smename` = 'Greg Norman' and `status` = 'in process' ";
            include "/InternDashboard/light-bootstrap-dashboard-master/dashboard.php";
            filterTable($query);
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
        mysqli_close($conn);
        }
         }
     }
 
 ?>