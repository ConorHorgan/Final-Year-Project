<html>
<head>
<link rel="stylesheet" type="text/css" href="select_style.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script>
/* global $ */
       function fetch_select(val)
{ 
                $.ajax({  
                     url:"fetch_data.php",  
                     method:"POST",  
                     data:{get_option:val},  
                     success:function(data){  
                         document.getElementById("new_select").innerHTML=data; 
                     }  
                });  
           }            
      
</script>
<!--
<script type="text/javascript">
function fetch_select(val)
{
    alert(val);
    /* global $ */
 $.ajax({
 url: '/InternDashboard/light-bootstrap-dashboard-master/ProjectProgression/AssignPositions/Dynamic-Form-Processing-with-PHP/Dynamic/fetch_data.php',
  method:"POST", 
 data: {
  get_option:val
 },
 success: function (response) {
     alert("AJAX request successfully completed");
  document.getElementById("new_select").innerHTML=response; 
 }
 });
}

</script>-->

</head>
<body>
<p id="heading">Dynamic Select Option Menu Using Ajax and PHP</p>
<center>
<div id="select_box">
 <select onchange="fetch_select(this.value);">
  <option>Select state</option>
  <?php
  $host = 'localhost';
  $user = 'conorhorgan95';
  $pass = '';
  mysql_connect($host, $user, $pass);
  mysql_select_db('intern_portal');

  $select=mysql_query("select Name, LastName from intern group by Name");
  while($row=mysql_fetch_array($select))
  {
   echo "<option>".$row['Name']. " " .$row['LastName']."</option>";
  }
 ?>
 </select>

 <select id="new_select">
 </select>
	  
</div>     
</center>
</body>
</html>