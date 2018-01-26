<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<
</head>
<body>
     <form method="post" id="project-search">
 Location: <select name="location" type="text" id="location" required="required" >
                        <option value="Boston">Boston</option>
                        <option value="Ireland">Ireland</option>
                        <option value="India">India</option>
                      </select>
 Earliest Start Date:  <input type="text" id="startdate" required="required" name="startdate"  />
 Latest End Date:   <input type="text" id="enddate" required="required" name="enddate"  />
 Number of Interns Needed: <select name="internsneeded" type="text" id="internsneeded" required="required">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
Estimated Hours of Work Per Intern: <input type="number" id="estimatehours" name="estimatehours" required="required" max="10000" min"1" />

  <input type="submit" value="Submit">
</form>

</body>
</html>
<script>
/*global $ */
  /* SOURCE: https://jqueryui.com/datepicker/ */
                /* global $ */
                $( function() {
                    var dateFormat = "yy-mm-dd",
                      from = $( element = document.getElementById(startdate) )
                        .datepicker({
                          dateFormat: "yy-mm-dd",
                          defaultDate: "+1w",
                          changeMonth: true,
                          numberOfMonths: 2,
                          minDate: -0
                        })
                        .on( "change", function() {
                          to.datepicker( "option", "minDate", getDate( this ) );
                        }),
                      to = $( "#enddate" ).datepicker({
                       dateFormat: "yy-mm-dd",
                        defaultDate: "+1w",
                        changeMonth: true,
                        numberOfMonths: 2
                      })
                      .on( "change", function() {
                        from.datepicker( "option", "maxDate", getDate( this ) );
                      });
                 
                    function getDate( element ) {
                      var date;
                      try {
                        date = $.datepicker.parseDate( dateFormat, element.value );
                      } catch( error ) {
                        date = null;
                      }
                 
                      return date;
                    }
                  } ); 
                   
$('#programmer_form').on('submit', function(event){
                  event.preventDefault();
                       
<?php
echo "<table id='example' class='display' cellspacing='0' width='100%'>";
echo "<tr><th>Id</th><th>Project Name</th><th>Office Location</th><th>Start Date</th><th>End Date</th><th>Number of Interns Needed</th><th>Estimated Hours Per Intern</th><th>Skills Required</th></tr>";

    

                       
class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "localhost";
$username = "conorhorgan95";
$password = "";
$dbname = "intern_portal";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT `id`, `projname`, `location`, `startdate`, `enddate`, `internsneeded`, `estimatehours`, `skill` FROM `project-registration` WHERE `location` = $location AND `startdate` = $startdate AND  `enddate` = $enddate AND `internsneeded` = $internsneeded AND `estimatehours` = $estimatehours
    ");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
                       
                   }
                   </script>

