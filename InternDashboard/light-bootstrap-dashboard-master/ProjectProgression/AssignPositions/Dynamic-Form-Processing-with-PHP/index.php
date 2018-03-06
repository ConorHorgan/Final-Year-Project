<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php $n = 1; $q = 1;?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Dynamic Form Processing with PHP | Tech Stream</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/default.css"/>
		<script type="text/javascript" src="js/script.js"></script> 
    </head>
    <body>    
        <form action="process.php" class="register" method="POST">
            
            <h1>Breakdown Project into Tasks and Assign Interns</h1>
            <fieldset class="row2">
				<legend>Breakdown Details</legend>
				<p> 
					<input type="button" value="Add Task" onClick="addRow('dataTable')" /> 
					<input type="button" value="Remove Task" onClick="deleteRow('dataTable')"  /> 
					<p>(All acions apply only to entries with check marked check boxes only.)</p>
				</p>
               <table id="dataTable" class="form" border="1"> <?php $n = $n + 1; ?>
                  <tbody>
                    <tr>
                      <p>
						<td><input type="checkbox" required="required" name="chk[]" checked="checked" /></td>
						<td>
							<label>Task Name</label>
							<input type="text" required="required" name="BX_NAME[]">
						 </td>
						 <div id="container">
						 <td>
						 <label for="b1">Assigned Intern</label>
						  <select type="text"  name="BX_gender[]" required="required">
						      <option value="" disabled ></option>
                          <?php
                          $host = 'localhost';
                          $user = 'conorhorgan95';
                          $pass = '';
                          mysql_connect($host, $user, $pass);
                          mysql_select_db('intern_portal');
                        $n = 1;
                          $select=mysql_query("select InternName, InternID from AppliedProjects where ProjectID = '4' AND Finalized = 'YES' group by InternName");
                          while($row=mysql_fetch_array($select))
                          {
                           echo "<option>".$row['InternName']."</option>";
                            ${"id$n"} = $row['InternID'];
                            $n = $n + 1;
                          }
                          ?>
                         </select>
                         </td>
                         </div>
						 <td>
							<label>Description</label>
							<input type="textarea" rows="4" cols="25" required="required" name="BX_age[]">
						 </td>
						 
							</p>
                    </tr>
                    </tbody>
                </table>
				<div class="clear"></div>
            </fieldset>
           
			<input class="submit" type="submit" value="Confirm &raquo;" />
			
			<div class="clear"></div>
        </form>
		
    </body>
	<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=9046834; 
var sc_invisible=1; 
var sc_security="ec55ba17"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="free hit
counter" href="http://statcounter.com/" target="_blank"><img
class="statcounter"
src="http://c.statcounter.com/9046834/0/ec55ba17/1/"
alt="free hit counter"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->
</html>





